<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteCloudWatchAlarmTemplate;

trait DeleteCloudWatchAlarmTemplateTrait
{
    /**
     * @param DeleteCloudWatchAlarmTemplateRequest $args
     * @return void
     */
    public function deleteCloudWatchAlarmTemplate(DeleteCloudWatchAlarmTemplateRequest $args)
    {
        parent::deleteCloudWatchAlarmTemplate($args->toArray());
    }
}
