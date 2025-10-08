<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCloudWatchAlarmTemplateGroup;

trait CreateCloudWatchAlarmTemplateGroupTrait
{
    /**
     * @param CreateCloudWatchAlarmTemplateGroupRequest $args
     * @return CreateCloudWatchAlarmTemplateGroupResponse
     */
    public function createCloudWatchAlarmTemplateGroup(CreateCloudWatchAlarmTemplateGroupRequest $args)
    {
        $result = parent::createCloudWatchAlarmTemplateGroup($args->toArray());
        return new CreateCloudWatchAlarmTemplateGroupResponse($result->toArray());
    }
}
