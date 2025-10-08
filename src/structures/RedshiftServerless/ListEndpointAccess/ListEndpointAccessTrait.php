<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListEndpointAccess;

trait ListEndpointAccessTrait
{
    /**
     * @param ListEndpointAccessRequest $args
     * @return ListEndpointAccessResponse
     */
    public function listEndpointAccess(ListEndpointAccessRequest $args)
    {
        $result = parent::listEndpointAccess($args->toArray());
        return new ListEndpointAccessResponse($result->toArray());
    }
}
