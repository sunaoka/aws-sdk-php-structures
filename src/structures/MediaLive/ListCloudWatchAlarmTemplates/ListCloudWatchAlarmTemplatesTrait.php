<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates;

trait ListCloudWatchAlarmTemplatesTrait
{
    /**
     * @param ListCloudWatchAlarmTemplatesRequest $args
     * @return ListCloudWatchAlarmTemplatesResponse
     */
    public function listCloudWatchAlarmTemplates(ListCloudWatchAlarmTemplatesRequest $args)
    {
        $result = parent::listCloudWatchAlarmTemplates($args->toArray());
        return new ListCloudWatchAlarmTemplatesResponse($result->toArray());
    }
}
