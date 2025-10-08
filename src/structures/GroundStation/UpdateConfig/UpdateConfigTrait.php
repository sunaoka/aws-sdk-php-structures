<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig;

trait UpdateConfigTrait
{
    /**
     * @param UpdateConfigRequest $args
     * @return UpdateConfigResponse
     */
    public function updateConfig(UpdateConfigRequest $args)
    {
        $result = parent::updateConfig($args->toArray());
        return new UpdateConfigResponse($result->toArray());
    }
}
