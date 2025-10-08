<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateEndpointAccess;

trait UpdateEndpointAccessTrait
{
    /**
     * @param UpdateEndpointAccessRequest $args
     * @return UpdateEndpointAccessResponse
     */
    public function updateEndpointAccess(UpdateEndpointAccessRequest $args)
    {
        $result = parent::updateEndpointAccess($args->toArray());
        return new UpdateEndpointAccessResponse($result->toArray());
    }
}
