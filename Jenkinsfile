pipeline {
  agent any
  stages {
    stage('error') {
      steps {
        dependencyCheck(odcInstallation: 'Dependency Checker')
      }
    }

  }
}