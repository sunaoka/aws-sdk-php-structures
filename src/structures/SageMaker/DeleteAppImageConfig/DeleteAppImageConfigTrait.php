<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAppImageConfig;

trait DeleteAppImageConfigTrait
{
    /**
     * @param DeleteAppImageConfigRequest $args
     * @return void
     */
    public function deleteAppImageConfig(DeleteAppImageConfigRequest $args)
    {
        parent::deleteAppImageConfig($args->toArray());
    }
}
