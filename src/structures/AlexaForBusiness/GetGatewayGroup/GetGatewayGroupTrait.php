<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetGatewayGroup;

trait GetGatewayGroupTrait
{
    /**
     * @param GetGatewayGroupRequest $args
     * @return GetGatewayGroupResponse
     */
    public function getGatewayGroup(GetGatewayGroupRequest $args)
    {
        $result = parent::getGatewayGroup($args->toArray());
        return new GetGatewayGroupResponse($result->toArray());
    }
}
