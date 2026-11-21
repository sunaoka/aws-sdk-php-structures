<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListInboundConnectorApplicationAssociations;

trait ListInboundConnectorApplicationAssociationsTrait
{
    /**
     * @param ListInboundConnectorApplicationAssociationsRequest $args
     * @return ListInboundConnectorApplicationAssociationsResponse
     */
    public function listInboundConnectorApplicationAssociations(ListInboundConnectorApplicationAssociationsRequest $args)
    {
        $result = parent::listInboundConnectorApplicationAssociations($args->toArray());
        return new ListInboundConnectorApplicationAssociationsResponse($result->toArray());
    }
}
