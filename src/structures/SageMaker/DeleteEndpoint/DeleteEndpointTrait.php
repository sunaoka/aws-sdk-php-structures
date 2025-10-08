<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEndpoint;

trait DeleteEndpointTrait
{
    /**
     * @param DeleteEndpointRequest $args
     * @return void
     */
    public function deleteEndpoint(DeleteEndpointRequest $args)
    {
        parent::deleteEndpoint($args->toArray());
    }
}
