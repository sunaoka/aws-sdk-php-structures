<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListAlarmModelVersions;

trait ListAlarmModelVersionsTrait
{
    /**
     * @param ListAlarmModelVersionsRequest $args
     * @return ListAlarmModelVersionsResponse
     */
    public function listAlarmModelVersions(ListAlarmModelVersionsRequest $args)
    {
        $result = parent::listAlarmModelVersions($args->toArray());
        return new ListAlarmModelVersionsResponse($result->toArray());
    }
}
