<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetCloudWatchAlarmTemplate;

trait GetCloudWatchAlarmTemplateTrait
{
    /**
     * @param GetCloudWatchAlarmTemplateRequest $args
     * @return GetCloudWatchAlarmTemplateResponse
     */
    public function getCloudWatchAlarmTemplate(GetCloudWatchAlarmTemplateRequest $args)
    {
        $result = parent::getCloudWatchAlarmTemplate($args->toArray());
        return new GetCloudWatchAlarmTemplateResponse($result->toArray());
    }
}
