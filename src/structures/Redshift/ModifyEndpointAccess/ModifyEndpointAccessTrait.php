<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEndpointAccess;

trait ModifyEndpointAccessTrait
{
    /**
     * @param ModifyEndpointAccessRequest $args
     * @return ModifyEndpointAccessResponse
     */
    public function modifyEndpointAccess(ModifyEndpointAccessRequest $args)
    {
        $result = parent::modifyEndpointAccess($args->toArray());
        return new ModifyEndpointAccessResponse($result->toArray());
    }
}
