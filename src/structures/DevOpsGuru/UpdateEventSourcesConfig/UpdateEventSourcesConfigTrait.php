<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateEventSourcesConfig;

trait UpdateEventSourcesConfigTrait
{
    /**
     * @param UpdateEventSourcesConfigRequest $args
     * @return UpdateEventSourcesConfigResponse
     */
    public function updateEventSourcesConfig(UpdateEventSourcesConfigRequest $args)
    {
        $result = parent::updateEventSourcesConfig($args->toArray());
        return new UpdateEventSourcesConfigResponse($result->toArray());
    }
}
