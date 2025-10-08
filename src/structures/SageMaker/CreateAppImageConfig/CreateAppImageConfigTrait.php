<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAppImageConfig;

trait CreateAppImageConfigTrait
{
    /**
     * @param CreateAppImageConfigRequest $args
     * @return CreateAppImageConfigResponse
     */
    public function createAppImageConfig(CreateAppImageConfigRequest $args)
    {
        $result = parent::createAppImageConfig($args->toArray());
        return new CreateAppImageConfigResponse($result->toArray());
    }
}
