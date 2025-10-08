<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteEndpointAccess;

trait DeleteEndpointAccessTrait
{
    /**
     * @param DeleteEndpointAccessRequest $args
     * @return DeleteEndpointAccessResponse
     */
    public function deleteEndpointAccess(DeleteEndpointAccessRequest $args)
    {
        $result = parent::deleteEndpointAccess($args->toArray());
        return new DeleteEndpointAccessResponse($result->toArray());
    }
}
