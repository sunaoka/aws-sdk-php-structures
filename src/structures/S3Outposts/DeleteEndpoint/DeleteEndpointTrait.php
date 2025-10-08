<?php

namespace Sunaoka\Aws\Structures\S3Outposts\DeleteEndpoint;

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
