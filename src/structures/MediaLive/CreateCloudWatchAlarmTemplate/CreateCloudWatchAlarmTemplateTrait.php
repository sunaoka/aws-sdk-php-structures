<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCloudWatchAlarmTemplate;

trait CreateCloudWatchAlarmTemplateTrait
{
    /**
     * @param CreateCloudWatchAlarmTemplateRequest $args
     * @return CreateCloudWatchAlarmTemplateResponse
     */
    public function createCloudWatchAlarmTemplate(CreateCloudWatchAlarmTemplateRequest $args)
    {
        $result = parent::createCloudWatchAlarmTemplate($args->toArray());
        return new CreateCloudWatchAlarmTemplateResponse($result->toArray());
    }
}
