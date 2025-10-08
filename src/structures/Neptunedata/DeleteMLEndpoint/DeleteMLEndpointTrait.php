<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteMLEndpoint;

trait DeleteMLEndpointTrait
{
    /**
     * @param DeleteMLEndpointRequest $args
     * @return DeleteMLEndpointResponse
     */
    public function deleteMLEndpoint(DeleteMLEndpointRequest $args)
    {
        $result = parent::deleteMLEndpoint($args->toArray());
        return new DeleteMLEndpointResponse($result->toArray());
    }
}
