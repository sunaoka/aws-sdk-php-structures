<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateInboundConnectorApplicationAssociations;

trait UpdateInboundConnectorApplicationAssociationsTrait
{
    /**
     * @param UpdateInboundConnectorApplicationAssociationsRequest $args
     * @return UpdateInboundConnectorApplicationAssociationsResponse
     */
    public function updateInboundConnectorApplicationAssociations(UpdateInboundConnectorApplicationAssociationsRequest $args)
    {
        $result = parent::updateInboundConnectorApplicationAssociations($args->toArray());
        return new UpdateInboundConnectorApplicationAssociationsResponse($result->toArray());
    }
}
