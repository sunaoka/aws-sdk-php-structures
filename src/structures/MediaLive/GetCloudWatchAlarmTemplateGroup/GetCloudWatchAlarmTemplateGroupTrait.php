<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetCloudWatchAlarmTemplateGroup;

trait GetCloudWatchAlarmTemplateGroupTrait
{
    /**
     * @param GetCloudWatchAlarmTemplateGroupRequest $args
     * @return GetCloudWatchAlarmTemplateGroupResponse
     */
    public function getCloudWatchAlarmTemplateGroup(GetCloudWatchAlarmTemplateGroupRequest $args)
    {
        $result = parent::getCloudWatchAlarmTemplateGroup($args->toArray());
        return new GetCloudWatchAlarmTemplateGroupResponse($result->toArray());
    }
}
