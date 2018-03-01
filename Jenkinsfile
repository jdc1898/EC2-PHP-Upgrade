#!/usr/bin/env groovy
pipeline {
	agent {
		label "master"
	}

	stages {
		stage('Build') {
			agent {
				docker {
					image 'eatel/proddev:test-buildenv'
					reuseNode true
				}
			}
			steps {
				sh 'php --version'
			}
		}
		stage('Test') {
			agent {
				docker {
					image 'eatel/proddev:test-buildenv'
					reuseNode true
				}
			}
			steps {
				sh 'pwd'
				sh 'ls -la'
				sh 'composer.phar update --dev'
				sh 'vendor/bin/phpunit tests/*Test*' 
				echo 'Test Phase is here.'
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
