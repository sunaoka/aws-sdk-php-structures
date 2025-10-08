<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel;

trait UpdateAlarmModelTrait
{
    /**
     * @param UpdateAlarmModelRequest $args
     * @return UpdateAlarmModelResponse
     */
    public function updateAlarmModel(UpdateAlarmModelRequest $args)
    {
        $result = parent::updateAlarmModel($args->toArray());
        return new UpdateAlarmModelResponse($result->toArray());
    }
}
