<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint;

trait ModifyEndpointTrait
{
    /**
     * @param ModifyEndpointRequest $args
     * @return ModifyEndpointResponse
     */
    public function modifyEndpoint(ModifyEndpointRequest $args)
    {
        $result = parent::modifyEndpoint($args->toArray());
        return new ModifyEndpointResponse($result->toArray());
    }
}
