<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel;

trait DescribeAlarmModelTrait
{
    /**
     * @param DescribeAlarmModelRequest $args
     * @return DescribeAlarmModelResponse
     */
    public function describeAlarmModel(DescribeAlarmModelRequest $args)
    {
        $result = parent::describeAlarmModel($args->toArray());
        return new DescribeAlarmModelResponse($result->toArray());
    }
}
