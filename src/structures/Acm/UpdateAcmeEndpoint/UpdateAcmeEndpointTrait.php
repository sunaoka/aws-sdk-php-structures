<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateAcmeEndpoint;

trait UpdateAcmeEndpointTrait
{
    /**
     * @param UpdateAcmeEndpointRequest $args
     * @return void
     */
    public function updateAcmeEndpoint(UpdateAcmeEndpointRequest $args)
    {
        parent::updateAcmeEndpoint($args->toArray());
    }
}
