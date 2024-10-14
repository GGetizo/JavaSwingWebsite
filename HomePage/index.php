<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo "JavaSwing Website"; ?></title>
</head>

<body>
    <?php include '../components/navbar.php'; ?>

    <h1 class="title"><?php echo "JAVASWING"; ?></h1>
    <p class="description">
        <?php echo "This website is for compliance in Intermediate Web Programming"; ?>
    </p>

    <div class="btnclass">
        <button class="btn">Know More</button>
    </div>

    <?php
    $sections = [
        [
            "title" => "JavaSwing",
            "description" => "Java Swing tutorial is a part of Java Foundation Classes (JFC) that is used to create window-based applications. It is built on the top of AWT (Abstract Windowing Toolkit) API and entirely written in java. Unlike AWT, Java Swing provides platform-independent and lightweight components. The javax.swing package provides classes for java swing API such as JButton, JTextField, JTextArea, JRadioButton, JCheckbox, JMenu, JColorChooser etc.",
        ]
    ];
    ?>

    <?php foreach ($sections as $section): ?>
        <div class="container">
            <section class="text-section">
                <h1><?php echo $section['title']; ?></h1>
                <p><?php echo $section['description']; ?></p>
            </section>

            <div class="image-section">
                <img src="../images/java-swing-schriftzug.png" alt="javaswing Logo">
            </div>
        </div>
    <?php endforeach; ?>

    <?php
    $sections = [
        [
            "title" => "What is JFC?",
            "description" => "Java Swing tutorial is a part of Java Foundation Classes (JFC) that is used to create window-based applications. It is built on the top of AWT (Abstract Windowing Toolkit) API and entirely written in java. 
        Unlike AWT, Java Swing provides platform-independent and lightweight components. 
The javax.swing package provides classes for java swing API such as JButton, JTextField, JTextArea, JRadioButton, JCheckbox, JMenu, JColorChooser etc. 
WHAT IS JFC? 
The Java Foundation Classes (JFC) are a set of GUI components which simplify the development of desktop applications. ",
        ]
    ];
    ?>

    <?php foreach ($sections as $section): ?>
        <div class="container2">
            <div class="image-section2">
                <img src="../images/JFC.gif" alt="JFC">
            </div>

            <section class="text-section1">
                <h1><?php echo $section['title']; ?></h1>
                <p><?php echo $section['description']; ?></p>
            </section>
        </div>
    <?php endforeach; ?>

    <div class="container">
        <section class="text-section">
            <h1><?php echo "Hierarchy of JavaSwing Classes"; ?></h1>
        </section>

        <div class="image-section1">
            <img src="../images/swinghierarchy-removebg-preview.png" alt="JavaSwing Hierarchy">
        </div>
    </div>

    <?php
    $sections = [
        [
            "title" => "Commonly used Methods of Component class:",
            "description" => "The methods of Component class are widely used in java swing that are given",
        ]
    ];
    ?>

    <?php foreach ($sections as $section): ?>
    <div class="container2">
        <div class="image-section4">
            <img src="../images/Commonly_used_Methods_of_Component_class-removebg-preview.png" alt="methods">
        </div>

        <section class="text-section1">
            <h1><?php echo $section['title']; ?></h1>
            <p><?php echo $section['description']; ?></p>
        </section>
    </div>
    <?php endforeach; ?>

    <div class="backgroundsamplecode">
        <h3><?php echo "Sample Java Swing Code:"; ?></h3>
        <div class="sample-code">
            <pre><code>
package javaawt;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class JavaAWT extends JFrame implements ActionListener {
    JFrame inputFrame = new JFrame();
    JFrame outputFrame = new JFrame();

    JPanel inputPanel = new JPanel();
    JPanel outputPanel = new JPanel();

    JTextField inputField = new JTextField(20);
    JLabel inputLabel = new JLabel("Enter Host Address: ");
    JLabel outputIp = new JLabel();
    JTextArea outputArea = new JTextArea(5, 15);

    JButton btnFindIp = new JButton("Find IP");
    JButton btnClear = new JButton("Clear");
    JButton btnOkay = new JButton("Okay");

    FlowLayout f1 = new FlowLayout();
    Font setFont = new Font("", Font.BOLD, 14);

    public JavaAWT() {
        this.setSize(280, 150);
        this.setLocation(200, 200);
        this.setTitle("INPUT");
        this.setResizable(true);
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        inputFrame.add(inputPanel);
        inputPanel.add(inputLabel);
        inputPanel.add(inputField);

        inputPanel.add(btnFindIp);
        btnFindIp.addActionListener(new btnFindIp());
        inputPanel.add(btnClear);
        btnClear.addActionListener(new btnClear());

        this.add(inputPanel);
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        throw new UnsupportedOperationException();
    }

    class btnFindIp implements ActionListener {
        @Override
        public void actionPerformed(ActionEvent a) {
            try {
                String host = inputField.getText();
                String ip = java.net.InetAddress.getByName(host).getHostAddress();
                outputArea.append("Host Address: \n " + host + "\n\nIP Address: \n " + ip + "\n");
            } catch (Exception ex) {
                System.out.println(ex);
            }

            outputFrame.setSize(230, 185);
            outputFrame.setLocation(430, 240);
            outputFrame.setTitle("OUTPUT");
            outputFrame.setResizable(false);
            outputFrame.setVisible(true);
            outputFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

            outputArea.setEditable(false);
            outputArea.setBackground(Color.LIGHT_GRAY);
            outputArea.setFont(setFont);

            outputFrame.add(outputPanel);

            outputPanel.add(outputArea);
            outputPanel.add(outputIp);
            outputPanel.add(btnOkay);

            btnFindIp.setEnabled(false);
            btnOkay.addActionListener(new btnOkay());
        }
    }

    class btnClear implements ActionListener {
        @Override
        public void actionPerformed(ActionEvent e) {
            inputField.setText("");
            outputArea.setText("");
            btnFindIp.setEnabled(true);
            outputFrame.dispose();
        }
    }

    class btnOkay implements ActionListener {
        @Override
        public void actionPerformed(ActionEvent i) {
            inputField.setText("");
            outputArea.setText("");
            btnFindIp.setEnabled(true);
            outputFrame.dispose();
        }
    }

    public static void main(String[] args) {
        JavaAWT javaAwt = new JavaAWT();
    }
}
            </code></pre>
        </div>
    </div>

    <div class="imagecontainer">
        <div class="samplecodeimages">
            <div class="caption"><?php echo "Output 1"; ?></div>
            <img src="../images/ss4.png" alt="Output 1">
        </div>
        <div class="samplecodeimages">
            <div class="caption"><?php echo "Output 2"; ?></div>
            <img src="../images/ss3.png" alt="Output 2">
        </div>
        <div class="samplecodeimages">
            <div class="caption"><?php echo "Output 3"; ?></div>
            <img src="../images/ss1.png" alt="Output 3">
        </div>
        <div class="samplecodeimages">
            <div class="caption"><?php echo "Output 4"; ?></div>
            <img src="../images/ss2.png" alt="Output 4">
        </div>
    </div>

    <script>
        document.querySelector('.btn').addEventListener('click', function() {
            document.getElementById('container').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>