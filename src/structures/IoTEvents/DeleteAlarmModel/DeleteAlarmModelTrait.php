<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DeleteAlarmModel;

trait DeleteAlarmModelTrait
{
    /**
     * @param DeleteAlarmModelRequest $args
     * @return DeleteAlarmModelResponse
     */
    public function deleteAlarmModel(DeleteAlarmModelRequest $args)
    {
        $result = parent::deleteAlarmModel($args->toArray());
        return new DeleteAlarmModelResponse($result->toArray());
    }
}
