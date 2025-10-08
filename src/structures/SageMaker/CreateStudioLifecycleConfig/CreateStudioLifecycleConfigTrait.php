<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateStudioLifecycleConfig;

trait CreateStudioLifecycleConfigTrait
{
    /**
     * @param CreateStudioLifecycleConfigRequest $args
     * @return CreateStudioLifecycleConfigResponse
     */
    public function createStudioLifecycleConfig(CreateStudioLifecycleConfigRequest $args)
    {
        $result = parent::createStudioLifecycleConfig($args->toArray());
        return new CreateStudioLifecycleConfigResponse($result->toArray());
    }
}
