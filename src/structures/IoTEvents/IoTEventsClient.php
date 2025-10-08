<?php

namespace Sunaoka\Aws\Structures\IoTEvents;

class IoTEventsClient extends \Aws\IoTEvents\IoTEventsClient
{
    use CreateAlarmModel\CreateAlarmModelTrait;
    use CreateDetectorModel\CreateDetectorModelTrait;
    use CreateInput\CreateInputTrait;
    use DeleteAlarmModel\DeleteAlarmModelTrait;
    use DeleteDetectorModel\DeleteDetectorModelTrait;
    use DeleteInput\DeleteInputTrait;
    use DescribeAlarmModel\DescribeAlarmModelTrait;
    use DescribeDetectorModel\DescribeDetectorModelTrait;
    use DescribeDetectorModelAnalysis\DescribeDetectorModelAnalysisTrait;
    use DescribeInput\DescribeInputTrait;
    use DescribeLoggingOptions\DescribeLoggingOptionsTrait;
    use GetDetectorModelAnalysisResults\GetDetectorModelAnalysisResultsTrait;
    use ListAlarmModelVersions\ListAlarmModelVersionsTrait;
    use ListAlarmModels\ListAlarmModelsTrait;
    use ListDetectorModelVersions\ListDetectorModelVersionsTrait;
    use ListDetectorModels\ListDetectorModelsTrait;
    use ListInputRoutings\ListInputRoutingsTrait;
    use ListInputs\ListInputsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutLoggingOptions\PutLoggingOptionsTrait;
    use StartDetectorModelAnalysis\StartDetectorModelAnalysisTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAlarmModel\UpdateAlarmModelTrait;
    use UpdateDetectorModel\UpdateDetectorModelTrait;
    use UpdateInput\UpdateInputTrait;
}
