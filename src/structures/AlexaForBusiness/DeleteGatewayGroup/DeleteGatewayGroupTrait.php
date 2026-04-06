<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteGatewayGroup;

trait DeleteGatewayGroupTrait
{
    /**
     * @param DeleteGatewayGroupRequest $args
     * @return DeleteGatewayGroupResponse
     */
    public function deleteGatewayGroup(DeleteGatewayGroupRequest $args)
    {
        $result = parent::deleteGatewayGroup($args->toArray());
        return new DeleteGatewayGroupResponse($result->toArray());
    }
}
