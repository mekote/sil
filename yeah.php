<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USDT Deposit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6777ef;
            --dark: #191d21;
            --light: #f0f0f0;
            --success: #28a745;
            --border: 1px solid rgba(0,0,0,0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .header h1 {
            color: var(--primary);
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            font-size: 14px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: var(--border);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .card-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(103, 119, 239, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
            font-size: 18px;
        }
        
        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark);
        }
        
        .card-subtitle {
            font-size: 13px;
            color: #666;
            margin-top: 3px;
        }
        
        .address-box {
            position: relative;
            margin-top: 15px;
        }
        
        .address-label {
            font-size: 13px;
            color: #666;
            margin-bottom: 8px;
            display: block;
        }
        
        .address-field {
            display: flex;
            border: var(--border);
            border-radius: 6px;
            overflow: hidden;
        }
        
        .address-input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            background: #f9f9f9;
            font-size: 13px;
            color: #333;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .copy-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .copy-btn:hover {
            background-color: #5567d5;
        }
        
        .copy-btn i {
            margin-right: 5px;
        }
        
        .network-info {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            line-height: 1.5;
        }
        
        .network-info i {
            color: var(--primary);
            margin-right: 5px;
        }
        
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 13px;
            background-color: #fff8e1;
            color: #ff6f00;
            border-left: 4px solid #ffc107;
        }
        
        .alert i {
            margin-right: 8px;
        }
        
        .success-message {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: var(--success);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            display: none;
            z-index: 1000;
            animation: slideIn 0.3s ease-out;
        }
        
        .complete-btn {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .complete-btn:hover {
            background-color: #5567d5;
        }
        
        .complete-btn i {
            margin-right: 8px;
        }
        
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        .loading-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 350px;
            width: 90%;
        }
        
        .loading-spinner {
            border: 4px solid rgba(0,0,0,0.1);
            border-radius: 50%;
            border-top: 4px solid var(--primary);
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        
        .loading-text {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .loading-subtext {
            font-size: 14px;
            color: #666;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @media (max-width: 576px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            
            .card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>USDT Deposit</h1>
            <p>Send only USDT to this deposit address</p>
        </div>
        
        <div class="alert">
            <i class="fas fa-exclamation-circle"></i>
            <strong>Important:</strong> Send only USDT to this address. Sending other assets may result in permanent loss.
        </div>
        
        <div class="card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fab fa-ethereum"></i>
                </div>
                <div>
                    <div class="card-title">BEP20 Network</div>
                    <div class="card-subtitle">Binance Smart Chain (BSC)</div>
                </div>
            </div>
            
            <div class="address-box">
                <label class="address-label">Deposit Address (BEP20)</label>
                <div class="address-field">
                    <input type="text" class="address-input" id="bep20-address" value="0x87bAa22Fe2705Cbcd7f96950469fF3295Cc6FccC" readonly>
                    <button class="copy-btn" onclick="copyAddress('bep20-address')">
                        <i class="far fa-copy"></i> Copy
                    </button>
                </div>
            </div>
            
            <div class="network-info">
                <i class="fas fa-info-circle"></i>
                <strong>Network fee:</strong> ~1-5 USDT. Minimum deposit: 10 USDT. Ensure you select <strong>BEP20</strong> network when transferring.
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div>
                    <div class="card-title">TRC20 Network</div>
                    <div class="card-subtitle">Tron Network</div>
                </div>
            </div>
            
            <div class="address-box">
                <label class="address-label">Deposit Address (TRC20)</label>
                <div class="address-field">
                    <input type="text" class="address-input" id="trc20-address" value="TJcQAGf5whvHMp5V1RWKQzFUJKYv43XxBj" readonly>
                    <button class="copy-btn" onclick="copyAddress('trc20-address')">
                        <i class="far fa-copy"></i> Copy
                    </button>
                </div>
            </div>
            
            <div class="network-info">
                <i class="fas fa-info-circle"></i>
                <strong>Network fee:</strong> ~1 USDT. Minimum deposit: 10 USDT. Ensure you select <strong>TRC20</strong> network when transferring.
            </div>
        </div>
        
        <button class="complete-btn" onclick="showLoading()">
            <i class="fas fa-check-circle"></i> Complete Deposit
        </button>
    </div>
    
    <div class="success-message" id="success-message">
        <i class="fas fa-check-circle"></i> Address copied to clipboard!
    </div>
    
    <div class="loading-overlay" id="loading-overlay">
        <div class="loading-content">
            <div class="loading-spinner"></div>
            <div class="loading-text">Your deposit is being confirmed on the blockchain</div>
            <div class="loading-subtext">This page will close automatically when confirmed. Please wait...</div>
        </div>
    </div>
    
    <script>
        function copyAddress(id) {
            const addressInput = document.getElementById(id);
            addressInput.select();
            addressInput.setSelectionRange(0, 99999);
            document.execCommand("copy");
            
            const successMessage = document.getElementById("success-message");
            successMessage.style.display = "block";
            
            setTimeout(() => {
                successMessage.style.display = "none";
            }, 3000);
        }
        
        function showLoading() {
            const loadingOverlay = document.getElementById("loading-overlay");
            loadingOverlay.style.display = "flex";
            
            // Simulate blockchain confirmation (in a real app, you would check with your backend)
            setTimeout(() => {
                window.close(); // This will close the window after confirmation
            }, 5000); // 5 seconds delay for demonstration
        }
    </script>
</body>
</html>
