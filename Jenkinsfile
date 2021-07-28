pipeline {
  agent any
  stages {
    stage("build") {
      steps {
        echo 'building the application....'
      }
    }
    stage('SonarQube Analysis') {
    def mvn = tool 'maven';
    withSonarQubeEnv() {
      sh "${mvn}/bin/mvn sonar:sonarQube"
    }
    }
    stage("test") {
      steps {
        echo 'test the application....'
      }
      }
        stage("deploy") {
      steps {
        echo 'deploy the application....'
      }
        }
          stage("clean") {
      steps {
        echo 'clean the application....'
      }
    }
  }
}
