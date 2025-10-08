<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModels;

trait ListAlarmModelsTrait
{
    /**
     * @param ListAlarmModelsRequest $args
     * @return ListAlarmModelsResponse
     */
    public function listAlarmModels(ListAlarmModelsRequest $args)
    {
        $result = parent::listAlarmModels($args->toArray());
        return new ListAlarmModelsResponse($result->toArray());
    }
}
