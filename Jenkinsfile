#!/usr/bin/env groovy
pipeline {
	agent {
		label "master"
	}

	stages {
		stage('Build') {
			steps {
				sh 'php --version'
			}
		}
		stage('Test') {
			steps {
				sh 'pwd'
				sh 'ls -la'
				sh '/usr/bin/composer.phar update --dev'
				sh 'vendor/bin/phpunit tests/*Test*' 
				echo 'Test Phase is here now and gone again....'
			}
		}
		stage('Deploy') {
			agent {
				label "master"
			}
			when {
				expression {
					currentBuild.result == null || currentBuild.result == 'SUCCESS'
				}
			}
			steps {
				echo 'Deploying...'
				sh 'uname -a'
			}
		}
	}
}
