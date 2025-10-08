<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeletePrivateGraphEndpoint;

trait DeletePrivateGraphEndpointTrait
{
    /**
     * @param DeletePrivateGraphEndpointRequest $args
     * @return DeletePrivateGraphEndpointResponse
     */
    public function deletePrivateGraphEndpoint(DeletePrivateGraphEndpointRequest $args)
    {
        $result = parent::deletePrivateGraphEndpoint($args->toArray());
        return new DeletePrivateGraphEndpointResponse($result->toArray());
    }
}
