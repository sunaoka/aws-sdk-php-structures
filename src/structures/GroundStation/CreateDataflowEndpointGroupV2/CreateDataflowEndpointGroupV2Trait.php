<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroupV2;

trait CreateDataflowEndpointGroupV2Trait
{
    /**
     * @param CreateDataflowEndpointGroupV2Request $args
     * @return CreateDataflowEndpointGroupV2Response
     */
    public function createDataflowEndpointGroupV2(CreateDataflowEndpointGroupV2Request $args)
    {
        $result = parent::createDataflowEndpointGroupV2($args->toArray());
        return new CreateDataflowEndpointGroupV2Response($result->toArray());
    }
}
