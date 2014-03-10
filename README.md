# Basic LAMP setup using Vagrant and Ansible

Been playing around with both Vagrant and Ansible lately, and I've been wanting to setup a basic LAMP setup. Well, this is it!

## How to get it running

1. Install Ansible on your machine
2. Install Vagrant
3. Install VirtualBox

Run:

    vagrant up

Open your browser to: `http://127.0.0.1:8080` to see if it has worked! You'll see some basic output from `html/index.php`

## Roadmap / POA

- Write a blog post on it
- Add PHPUnit
- Add Composer
- Figure out PHPStorm integration
- Install Magento tools:
    - Magerun
    - modman
- Breakup playbook.yml into digestable chunks