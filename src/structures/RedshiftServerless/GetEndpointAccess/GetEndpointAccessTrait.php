<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetEndpointAccess;

trait GetEndpointAccessTrait
{
    /**
     * @param GetEndpointAccessRequest $args
     * @return GetEndpointAccessResponse
     */
    public function getEndpointAccess(GetEndpointAccessRequest $args)
    {
        $result = parent::getEndpointAccess($args->toArray());
        return new GetEndpointAccessResponse($result->toArray());
    }
}
