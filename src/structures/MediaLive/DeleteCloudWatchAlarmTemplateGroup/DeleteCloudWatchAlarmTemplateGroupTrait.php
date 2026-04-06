<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteCloudWatchAlarmTemplateGroup;

trait DeleteCloudWatchAlarmTemplateGroupTrait
{
    /**
     * @param DeleteCloudWatchAlarmTemplateGroupRequest $args
     * @return void
     */
    public function deleteCloudWatchAlarmTemplateGroup(DeleteCloudWatchAlarmTemplateGroupRequest $args)
    {
        parent::deleteCloudWatchAlarmTemplateGroup($args->toArray());
    }
}
