<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeEndpoint;

trait DeleteAcmeEndpointTrait
{
    /**
     * @param DeleteAcmeEndpointRequest $args
     * @return void
     */
    public function deleteAcmeEndpoint(DeleteAcmeEndpointRequest $args)
    {
        parent::deleteAcmeEndpoint($args->toArray());
    }
}
