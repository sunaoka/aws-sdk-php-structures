<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateCloudWatchAlarmTemplate;

trait UpdateCloudWatchAlarmTemplateTrait
{
    /**
     * @param UpdateCloudWatchAlarmTemplateRequest $args
     * @return UpdateCloudWatchAlarmTemplateResponse
     */
    public function updateCloudWatchAlarmTemplate(UpdateCloudWatchAlarmTemplateRequest $args)
    {
        $result = parent::updateCloudWatchAlarmTemplate($args->toArray());
        return new UpdateCloudWatchAlarmTemplateResponse($result->toArray());
    }
}
