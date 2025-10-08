<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteStudioLifecycleConfig;

trait DeleteStudioLifecycleConfigTrait
{
    /**
     * @param DeleteStudioLifecycleConfigRequest $args
     * @return void
     */
    public function deleteStudioLifecycleConfig(DeleteStudioLifecycleConfigRequest $args)
    {
        parent::deleteStudioLifecycleConfig($args->toArray());
    }
}
