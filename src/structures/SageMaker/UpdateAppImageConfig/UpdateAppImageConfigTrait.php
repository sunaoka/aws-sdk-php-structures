<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateAppImageConfig;

trait UpdateAppImageConfigTrait
{
    /**
     * @param UpdateAppImageConfigRequest $args
     * @return UpdateAppImageConfigResponse
     */
    public function updateAppImageConfig(UpdateAppImageConfigRequest $args)
    {
        $result = parent::updateAppImageConfig($args->toArray());
        return new UpdateAppImageConfigResponse($result->toArray());
    }
}
