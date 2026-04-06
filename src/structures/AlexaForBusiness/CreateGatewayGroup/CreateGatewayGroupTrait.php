<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateGatewayGroup;

trait CreateGatewayGroupTrait
{
    /**
     * @param CreateGatewayGroupRequest $args
     * @return CreateGatewayGroupResponse
     */
    public function createGatewayGroup(CreateGatewayGroupRequest $args)
    {
        $result = parent::createGatewayGroup($args->toArray());
        return new CreateGatewayGroupResponse($result->toArray());
    }
}
