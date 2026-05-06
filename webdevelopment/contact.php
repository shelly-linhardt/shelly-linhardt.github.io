<?php include 'header.php'; ?>

<main class="contact-section">
    
    <h1>Contact Me</h1>

    <div class="contact-layout">
        
        <form action="#" method="post">

        <label for="title">Title:</label>
        <select id="title" name="title" required>
            <option value="">Select a title</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
            <option value="Dr.">Dr.</option>
        </select>

        <label for="name">Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            placeholder="Enter your full name"
            required>

        <label for="email">Email:</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Enter your email address"
            required>

        <label for="message">Message:</label>
        <textarea 
            id="message" 
            name="message" 
            placeholder="Enter your message"
            required></textarea>

        <label for="topic">Select a topic:</label>
        <select id="topic" name="topic" required>
            <option value="">Select a topic</option>
            <option value="support">General Inquiry</option>
            <option value="feedback">Feedback</option>
            <option value="business">Collaboration</option>
            <option value="other">Other</option>
        </select>

        <button type="submit">Send Message</button>
    </form>

    <img src="bookheart.png" 
         alt="Books" 
         class="contact-image">
    </div>

</main>

<p class="ai-credit">Some images on this site were created with the assistance of AI tools.</p>

<?php include 'footer.php'; ?>