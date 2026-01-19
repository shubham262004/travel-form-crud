// Form Validation Script for Travel Form

// Get form elements
const form = document.querySelector('form');
const inputs = document.querySelectorAll('input[type="text"], textarea');
const submitBtn = document.querySelector('.btn');

// Validate individual field
function validateField(field) {
    if (field.value.trim() === '') {
        field.style.borderColor = '#ff6b6b';
        field.style.backgroundColor = '#ffe0e0';
        return false;
    } else {
        field.style.borderColor = '#4CAF50';
        field.style.backgroundColor = '#e8f5e9';
        return true;
    }
}

// Email validation
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Phone validation (10 digits)
function validatePhone(phone) {
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone.replace(/\D/g, ''));
}

// Real-time validation on input
inputs.forEach(input => {
    input.addEventListener('blur', function() {
        validateField(this);
        
        // Additional validation for specific fields
        if (this.name === 'Email' && this.value.trim() !== '') {
            if (!validateEmail(this.value)) {
                this.style.borderColor = '#ff6b6b';
                alert('Please enter a valid email address');
            }
        }
        
        if (this.name === 'Phone' && this.value.trim() !== '') {
            if (!validatePhone(this.value)) {
                this.style.borderColor = '#ff6b6b';
                alert('Please enter a valid 10-digit phone number');
            }
        }
        
        if (this.name === 'Age' && this.value.trim() !== '') {
            if (isNaN(this.value) || this.value < 1 || this.value > 120) {
                this.style.borderColor = '#ff6b6b';
                alert('Please enter a valid age');
            }
        }
    });
    
    input.addEventListener('focus', function() {
        this.style.borderColor = '#007bff';
        this.style.backgroundColor = '#ffffff';
    });
});

// Form submission validation
if (form) {
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        inputs.forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all fields correctly');
        }
    });
}

// Add success feedback
function showSuccess() {
    const container = document.querySelector('.container');
    const successMsg = document.createElement('div');
    successMsg.style.cssText = 'background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; margin-top: 20px; font-size: 16px;';
    successMsg.textContent = 'Form submitted successfully!';
    container.appendChild(successMsg);
}
