<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuestionOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question_options = array(
            array('id' => '1','question_id' => '1','title' => 'Data transmission among wireless devices with digital links','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '2','question_id' => '2','title' => 'a)Data Transmission Among Wireless Devices','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '3','question_id' => '2','title' => 'b)Text Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '4','question_id' => '2','title' => 'c)Audio Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '5','question_id' => '2','title' => 'd)Video Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '6','question_id' => '3','title' => 'a) 2','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '7','question_id' => '3','title' => 'b) 1','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '8','question_id' => '3','title' => 'c) 3','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '9','question_id' => '3','title' => 'd) 5','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '10','question_id' => '4','title' => 'a)Data Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '11','question_id' => '4','title' => 'b) Data Reception','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '12','question_id' => '4','title' => 'c) End-End Communication','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '13','question_id' => '4','title' => 'd) All of the above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '14','question_id' => '5','title' => 'a) Mobile Communication','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '15','question_id' => '5','title' => 'b) Mobile Software','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '16','question_id' => '5','title' => 'c) Mobile Hardware','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '17','question_id' => '5','title' => 'd) Mobile Device','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '18','question_id' => '6','title' => 'a) Analog Link','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '19','question_id' => '6','title' => 'b) Digital Link','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '20','question_id' => '6','title' => 'c) Both Links','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '21','question_id' => '6','title' => 'd) None of Above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '22','question_id' => '9','title' => 'a) Linux OS','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '23','question_id' => '9','title' => 'b) Hadoop','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '24','question_id' => '9','title' => 'c) MapReduce','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '25','question_id' => '9','title' => 'd) Windows','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '26','question_id' => '10','title' => 'Layered Environment Built-in With Linux Kernel','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '27','question_id' => '10','title' => 'Unlayered Environment','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '28','question_id' => '10','title' => 'Layered without Linux Kernel','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '29','question_id' => '10','title' => 'Linux Kernel Only','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '30','question_id' => '11','title' => '2','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '31','question_id' => '11','title' => '3','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '32','question_id' => '11','title' => '4','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '33','question_id' => '11','title' => '5','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '34','question_id' => '12','title' => 'Depends on running streams or devices','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '35','question_id' => '12','title' => 'independent development','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '36','question_id' => '12','title' => 'depends on the time of execution','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '37','question_id' => '12','title' => 'depend on a business level','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '38','question_id' => '13','title' => 'based on program perspective','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '39','question_id' => '13','title' => 'based on structure perspective','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '40','question_id' => '13','title' => 'based on data handled','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '41','question_id' => '13','title' => 'based on customers','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '42','question_id' => '14','title' => 'Database server','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '43','question_id' => '14','title' => 'content tracker','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '44','question_id' => '14','title' => 'content synthesizer','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '45','question_id' => '14','title' => 'content checker','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '46','question_id' => '17','title' => '1','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '47','question_id' => '17','title' => '2','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '48','question_id' => '17','title' => '3','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '49','question_id' => '17','title' => '4','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '50','question_id' => '18','title' => 'Concept to give the ability to a computer for self-learning','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '51','question_id' => '18','title' => 'Training people to study how to operate a computer','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '52','question_id' => '18','title' => 'Study of learning tactics','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '53','question_id' => '18','title' => 'Training of less-sized data','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '54','question_id' => '19','title' => 'More than 80%','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '55','question_id' => '19','title' => 'Below 50%','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '56','question_id' => '19','title' => 'Exactly 50%','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '57','question_id' => '19','title' => 'None of above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '58','question_id' => '20','title' => 'Data-Driven','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '59','question_id' => '20','title' => 'Mistakes-based Learning','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '60','question_id' => '20','title' => 'Task-Driven Approach','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '61','question_id' => '20','title' => 'Simplest Approach','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '62','question_id' => '21','title' => 'Historical Variables','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '63','question_id' => '21','title' => 'Address variables','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '64','question_id' => '21','title' => 'No Historical Variables','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '65','question_id' => '21','title' => 'None of the Above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '66','question_id' => '22','title' => 'Robotics, Gaming, and navigation','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '67','question_id' => '22','title' => 'Data Science, Research & Development','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '68','question_id' => '22','title' => 'Space Research','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '69','question_id' => '22','title' => 'Art, Science, Politics','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '70','question_id' => '25','title' => 'Least Absolute Selection Shrinkage Operato','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '71','question_id' => '25','title' => 'Low Anomaly Selection Short Operations','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '72','question_id' => '25','title' => 'Least Anomaly Selection Slow Operations','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '73','question_id' => '25','title' => 'Low Anonymous Set State Operator','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '74','question_id' => '26','title' => 'Imaginary or Discrete value','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '75','question_id' => '26','title' => 'Real & Continuous','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '76','question_id' => '26','title' => 'Discrete Only','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '77','question_id' => '26','title' => 'Continuous Only','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '78','question_id' => '27','title' => 'Support Vector Regression','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '79','question_id' => '27','title' => 'Suppress Via Regression','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '80','question_id' => '27','title' => 'Supervised Vertical Regression','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '81','question_id' => '27','title' => 'Supply Vector Regression','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '82','question_id' => '28','title' => 'Categorical Form of Outputs','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '83','question_id' => '28','title' => 'Non-Categorical','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '84','question_id' => '28','title' => 'Parallel Form of Outputs','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '85','question_id' => '28','title' => 'Threshold Level','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '86','question_id' => '29','title' => 'Non-Statistical Technique','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '87','question_id' => '29','title' => 'Linear','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '88','question_id' => '29','title' => 'Statistical techniques','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '89','question_id' => '29','title' => 'None of Above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '90','question_id' => '30','title' => 'Detecting Unexpected Event','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '91','question_id' => '30','title' => 'Detecting Expected Event','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '92','question_id' => '30','title' => 'Detecting Expected and Unexpected Event','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '93','question_id' => '30','title' => 'None of Above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '94','question_id' => '33','title' => 'Amazon Wired Services','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '95','question_id' => '33','title' => 'Analog Weighing Services','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '96','question_id' => '33','title' => 'Amazon Web Services','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '97','question_id' => '33','title' => 'Antique Web Services','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '98','question_id' => '36','title' => 'MQ Telemetry Transport','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '99','question_id' => '36','title' => 'MQ Telemedicine Transport','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '100','question_id' => '36','title' => 'MQ Teleconference Terrific','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '101','question_id' => '36','title' => 'MQ Terrestrial Telemetry','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '106','question_id' => '38','title' => 'Client-Server Application','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '107','question_id' => '38','title' => 'Source-Destination','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '108','question_id' => '38','title' => 'Sender-Receiver','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '109','question_id' => '38','title' => 'Networks','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '110','question_id' => '39','title' => 'Alpha','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '111','question_id' => '39','title' => 'Beta','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '112','question_id' => '39','title' => 'Gamma','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '113','question_id' => '39','title' => 'Lambda','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '114','question_id' => '40','title' => 'Management Console & SDKs','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '115','question_id' => '40','title' => 'AWS Starter','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '116','question_id' => '40','title' => 'Big Data Tool','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '117','question_id' => '40','title' => 'Amazon Ec2','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '118','question_id' => '41','title' => 'Reliable & Safe Message Transfer','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '119','question_id' => '41','title' => 'Unsafe Message Transfe','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '120','question_id' => '41','title' => 'Private information','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '121','question_id' => '41','title' => 'Without any rule','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '122','question_id' => '42','title' => 'MQTT','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '123','question_id' => '42','title' => 'MQTT & HTTP','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '124','question_id' => '42','title' => 'HTTP','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '125','question_id' => '42','title' => 'None of Above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '126','question_id' => '1','title' => 'Data Transmission among wired devices','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '127','question_id' => '1','title' => 'Data Reception','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '128','question_id' => '1','title' => 'Data Hiding','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '129','question_id' => '45','title' => 'Data Transmission among wired devices','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '130','question_id' => '45','title' => 'Data Transmission among wireless devices with digital links','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '131','question_id' => '45','title' => 'Data Reception','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '132','question_id' => '45','title' => 'Data Hiding','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '133','question_id' => '46','title' => 'Data Transmission Among Wireless Devices','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '134','question_id' => '46','title' => 'Text Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '135','question_id' => '46','title' => 'Audio Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '136','question_id' => '46','title' => 'Video Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '137','question_id' => '47','title' => '1','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '138','question_id' => '47','title' => '2','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '139','question_id' => '47','title' => '3','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '140','question_id' => '47','title' => '4','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '141','question_id' => '48','title' => 'Data Transmission','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '142','question_id' => '48','title' => 'Data Reception','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '143','question_id' => '48','title' => 'End-End Communication','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '144','question_id' => '48','title' => 'All of the above','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '145','question_id' => '49','title' => 'Mobile Communication','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '146','question_id' => '49','title' => 'Mobile Software','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '147','question_id' => '49','title' => 'Mobile Hardware','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '148','question_id' => '49','title' => 'Mobile Device','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '149','question_id' => '52','title' => 'hypertext preprocessor','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '150','question_id' => '52','title' => 'hyper','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '151','question_id' => '52','title' => 'text','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '152','question_id' => '52','title' => 'process','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '153','question_id' => '53','title' => 'cass','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '154','question_id' => '53','title' => 'Casscading','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '155','question_id' => '53','title' => 'Casscading Stylesheet','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '156','question_id' => '53','title' => 'html','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '157','question_id' => '54','title' => 'html','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '158','question_id' => '54','title' => 'hypertext markup language','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '159','question_id' => '54','title' => 'markup','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '160','question_id' => '54','title' => 'css','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '161','question_id' => '55','title' => 'php','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '162','question_id' => '55','title' => 'hyper','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '163','question_id' => '55','title' => 'text','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '164','question_id' => '55','title' => 'external','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '165','question_id' => '56','title' => 'php','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '166','question_id' => '56','title' => 'hypertext markup language','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '167','question_id' => '56','title' => 'text','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '168','question_id' => '56','title' => 'external','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '169','question_id' => '57','title' => 'php','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '170','question_id' => '57','title' => 'hypertext markup language','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '171','question_id' => '57','title' => 'Casscading Stylesheet','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '172','question_id' => '57','title' => 'external','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '173','question_id' => '58','title' => 'Structured Query List','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '174','question_id' => '58','title' => 'Structure Query Language','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '175','question_id' => '58','title' => 'Sample Query Language','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '176','question_id' => '58','title' => 'None of these','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '177','question_id' => '59','title' => 'FLOAT','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '178','question_id' => '59','title' => 'NUMERIC','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '179','question_id' => '59','title' => 'Sample Query Language','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '180','question_id' => '59','title' => 'None of these','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '181','question_id' => '60','title' => 'TRUNCATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '182','question_id' => '60','title' => 'ALTER','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '183','question_id' => '60','title' => 'CREATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '184','question_id' => '60','title' => 'UPDATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '4'),
            array('id' => '185','question_id' => '61','title' => 'COMMIT and ROLLBACK','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '186','question_id' => '61','title' => 'ALTER','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '187','question_id' => '61','title' => 'CREATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '188','question_id' => '61','title' => 'UPDATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '189','question_id' => '62','title' => 'TRUNCATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '190','question_id' => '62','title' => 'ALTER','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '191','question_id' => '62','title' => 'CREATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '192','question_id' => '62','title' => 'UPDATE','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '193','question_id' => '63','title' => '16','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '194','question_id' => '63','title' => '32','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '195','question_id' => '63','title' => '34','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '196','question_id' => '63','title' => 'None of these','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '4'),
            array('id' => '197','question_id' => '64','title' => 'Zim Den','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '198','question_id' => '64','title' => 'Guido van Rossum','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '2'),
            array('id' => '199','question_id' => '64','title' => 'Niene Stom','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '200','question_id' => '64','title' => 'Wick van Rossum','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '201','question_id' => '65','title' => '1995','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '202','question_id' => '65','title' => '1972','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '203','question_id' => '65','title' => '1981','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '204','question_id' => '65','title' => '1989','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '4'),
            array('id' => '205','question_id' => '66','title' => 'English','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '1'),
            array('id' => '206','question_id' => '66','title' => 'PHP','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '207','question_id' => '66','title' => 'C','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '3'),
            array('id' => '208','question_id' => '66','title' => 'All','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4'),
            array('id' => '209','question_id' => '67','title' => '.py','image_id' => NULL,'d_pref' => 'text','is_correct' => '1','sort_order' => '1'),
            array('id' => '210','question_id' => '67','title' => '.python','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '2'),
            array('id' => '211','question_id' => '67','title' => '.p','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '3'),
            array('id' => '212','question_id' => '67','title' => 'None of these','image_id' => NULL,'d_pref' => 'text','is_correct' => '0','sort_order' => '4')
        );

        \Illuminate\Support\Facades\DB::table('question_options')->insert(
            $question_options
        );
    }
}