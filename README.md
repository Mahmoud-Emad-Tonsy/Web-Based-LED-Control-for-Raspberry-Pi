# Web-Based LED Control for Raspberry Pi

## Project Overview
**Title:** Web-Based LED Control for Raspberry Pi

**Description:**  
This project allows users to control an LED connected to GPIO-17 on a Raspberry Pi using a web interface. The user can turn the LED on or off through a simple web page. The front-end is built using HTML, CSS, and JavaScript (AJAX), while PHP is used to handle the backend logic for GPIO control. The project uses **WiringPi** to interact with the Raspberry Pi's GPIO pins.

---

## Technologies Used
- **Languages/Frameworks:**
  - **Frontend:** HTML, CSS, JavaScript (AJAX)
  - **Backend:** PHP
  - **Libraries/Tools:**
    - **WiringPi**: For controlling Raspberry Pi GPIO pins.
    - **AJAX**: For asynchronous communication between the front-end and the PHP backend.

- **Server:**
  - **lighttpd**: A lightweight web server used to host the project.

---

## Functional Requirements
### Core Features:
1. **Web Interface:**  
   A simple HTML page with buttons to control the state of the LED (turn it ON/OFF).
   
2. **Real-Time Interaction:**  
   The page updates the LED status dynamically without requiring page reloads.
   
3. **GPIO Control:**  
   Backend PHP script controls the GPIO pin to turn the LED on and off using **WiringPi**.
   
4. **LED Status Display:**  
   Display whether the LED is on or off on the web interface.

### User Flow:
1. The user accesses the web page hosted on the Raspberry Pi.
2. The user clicks either the "Turn LED ON" or "Turn LED OFF" button.
3. An AJAX request is sent to the server-side PHP script.
4. The PHP script interacts with the Raspberry Pi's GPIO pins to control the LED.
5. The status of the LED is updated on the web interface in real-time.

---

## Design Requirements
### UI/UX:
- Minimal and clean interface with two buttons: "Turn LED ON" and "Turn LED OFF".
- Display the current LED status below the buttons (ON/OFF).
- Responsive design to ensure the page works well on desktop, tablet, and mobile devices.

### Accessibility:
- The interface is designed to be simple and easy to navigate.
- Clear button labeling with appropriate color contrast, following WCAG accessibility standards.

---

## Technical Requirements

### Browser Compatibility:
- The project should work in modern browsers such as Google Chrome, Mozilla Firefox, Safari, and Microsoft Edge.
- Ensure basic functionality works across older browsers like Internet Explorer 11, if needed.

### Performance:
- The web page should load quickly without delays.
- AJAX requests should be processed quickly to provide a smooth user experience.

---

## Implementation Plan
### Development Steps:
1. Set up Raspberry Pi with **lighttpd**, PHP, and **WiringPi**.
2. Create the HTML structure for the web page.
3. Add CSS to style the page, ensuring a responsive layout.
4. Implement JavaScript (AJAX) to handle button clicks and send requests to PHP.
5. Write the PHP script to interact with the GPIO pins and control the LED using **WiringPi**.
6. Test the system locally by accessing the page through the Raspberry Pi’s IP address.
7. Debug any issues with AJAX requests or GPIO interactions.


---

## Testing
### Testing Methods:
- **Manual Testing:**  
  Test the page in multiple browsers and devices to ensure it is responsive and functional.  
  Manually test the LED control by pressing the "Turn LED ON" and "Turn LED OFF" buttons.
  


---

## Deployment
### Hosting/Environment:
- The project will be hosted on a **Raspberry Pi** using the **lighttpd** web server.
- The web interface will be accessible through the Raspberry Pi’s local IP address or through a public domain (if configured with port forwarding or cloud hosting).

---

## How to Run This Project
1. **Prerequisites:**  
   - Raspberry Pi with Raspbian installed.
   - **WiringPi** installed on the Raspberry Pi.
   - **lighttpd** and **PHP** installed on the Raspberry Pi.

2. **Installation Steps:**
   1. Clone this repository to your Raspberry Pi.
   2. Copy the files to `/var/www/` or `/var/www/html/` on your Raspberry Pi.
   3. Ensure **lighttpd** and **PHP** are running:
      ```bash
      sudo service lighttpd start
      sudo service php7.4-fpm start
      ```
   4. Install **WiringPi** (if not already installed):
      ```bash
      sudo apt-get install wiringpi
      ```
   5. Access the web page through the Raspberry Pi's IP address (e.g., `http://<raspberry-pi-ip>/index.html`).
   6. Use the buttons to control the LED.

---

## License
This project is open-source and available under the [MIT License](LICENSE).
