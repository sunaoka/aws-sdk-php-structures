<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateGatewayGroup;

trait UpdateGatewayGroupTrait
{
    /**
     * @param UpdateGatewayGroupRequest $args
     * @return UpdateGatewayGroupResponse
     */
    public function updateGatewayGroup(UpdateGatewayGroupRequest $args)
    {
        $result = parent::updateGatewayGroup($args->toArray());
        return new UpdateGatewayGroupResponse($result->toArray());
    }
}
