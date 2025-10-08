<?php

namespace Sunaoka\Aws\Structures\IoTEventsData;

class IoTEventsDataClient extends \Aws\IoTEventsData\IoTEventsDataClient
{
    use BatchAcknowledgeAlarm\BatchAcknowledgeAlarmTrait;
    use BatchDeleteDetector\BatchDeleteDetectorTrait;
    use BatchDisableAlarm\BatchDisableAlarmTrait;
    use BatchEnableAlarm\BatchEnableAlarmTrait;
    use BatchPutMessage\BatchPutMessageTrait;
    use BatchResetAlarm\BatchResetAlarmTrait;
    use BatchSnoozeAlarm\BatchSnoozeAlarmTrait;
    use BatchUpdateDetector\BatchUpdateDetectorTrait;
    use DescribeAlarm\DescribeAlarmTrait;
    use DescribeDetector\DescribeDetectorTrait;
    use ListAlarms\ListAlarmsTrait;
    use ListDetectors\ListDetectorsTrait;
}
