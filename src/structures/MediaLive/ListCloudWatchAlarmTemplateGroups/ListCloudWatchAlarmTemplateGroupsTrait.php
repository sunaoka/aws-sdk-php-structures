<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplateGroups;

trait ListCloudWatchAlarmTemplateGroupsTrait
{
    /**
     * @param ListCloudWatchAlarmTemplateGroupsRequest $args
     * @return ListCloudWatchAlarmTemplateGroupsResponse
     */
    public function listCloudWatchAlarmTemplateGroups(ListCloudWatchAlarmTemplateGroupsRequest $args)
    {
        $result = parent::listCloudWatchAlarmTemplateGroups($args->toArray());
        return new ListCloudWatchAlarmTemplateGroupsResponse($result->toArray());
    }
}
