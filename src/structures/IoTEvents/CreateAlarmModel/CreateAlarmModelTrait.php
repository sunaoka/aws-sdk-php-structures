<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel;

trait CreateAlarmModelTrait
{
    /**
     * @param CreateAlarmModelRequest $args
     * @return CreateAlarmModelResponse
     */
    public function createAlarmModel(CreateAlarmModelRequest $args)
    {
        $result = parent::createAlarmModel($args->toArray());
        return new CreateAlarmModelResponse($result->toArray());
    }
}
