# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "centos65"
  config.vm.box_url = "https://github.com/2creatives/vagrant-centos/releases/download/v6.5.1/centos65-x86_64-20131205.box"
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "public_network", :bridge => 'en0: Wi-Fi (AirPort)'
  
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbook.yml"
  end
  config.vm.synced_folder "html/", "/var/www/html", :mount_options => ["dmode=777","fmode=777"]

end
