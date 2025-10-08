<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplateGroup;

trait UpdateCloudWatchAlarmTemplateGroupTrait
{
    /**
     * @param UpdateCloudWatchAlarmTemplateGroupRequest $args
     * @return UpdateCloudWatchAlarmTemplateGroupResponse
     */
    public function updateCloudWatchAlarmTemplateGroup(UpdateCloudWatchAlarmTemplateGroupRequest $args)
    {
        $result = parent::updateCloudWatchAlarmTemplateGroup($args->toArray());
        return new UpdateCloudWatchAlarmTemplateGroupResponse($result->toArray());
    }
}
