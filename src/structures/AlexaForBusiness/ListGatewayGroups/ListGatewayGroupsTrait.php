<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListGatewayGroups;

trait ListGatewayGroupsTrait
{
    /**
     * @param ListGatewayGroupsRequest $args
     * @return ListGatewayGroupsResponse
     */
    public function listGatewayGroups(ListGatewayGroupsRequest $args)
    {
        $result = parent::listGatewayGroups($args->toArray());
        return new ListGatewayGroupsResponse($result->toArray());
    }
}
