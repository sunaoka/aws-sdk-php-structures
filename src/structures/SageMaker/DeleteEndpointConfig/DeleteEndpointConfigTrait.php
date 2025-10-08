<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpointConfig;

trait DeleteEndpointConfigTrait
{
    /**
     * @param DeleteEndpointConfigRequest $args
     * @return void
     */
    public function deleteEndpointConfig(DeleteEndpointConfigRequest $args)
    {
        parent::deleteEndpointConfig($args->toArray());
    }
}
