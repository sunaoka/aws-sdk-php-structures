<?php

namespace Sunaoka\Aws\Structures\Sns\DeleteEndpoint;

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
