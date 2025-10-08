<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayMulticastGroups;

trait SearchTransitGatewayMulticastGroupsTrait
{
    /**
     * @param SearchTransitGatewayMulticastGroupsRequest $args
     * @return SearchTransitGatewayMulticastGroupsResponse
     */
    public function searchTransitGatewayMulticastGroups(SearchTransitGatewayMulticastGroupsRequest $args)
    {
        $result = parent::searchTransitGatewayMulticastGroups($args->toArray());
        return new SearchTransitGatewayMulticastGroupsResponse($result->toArray());
    }
}
