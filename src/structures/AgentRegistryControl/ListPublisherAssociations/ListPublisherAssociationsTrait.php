<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListPublisherAssociations;

trait ListPublisherAssociationsTrait
{
    /**
     * @param ListPublisherAssociationsRequest $args
     * @return ListPublisherAssociationsResponse
     */
    public function listPublisherAssociations(ListPublisherAssociationsRequest $args)
    {
        $result = parent::listPublisherAssociations($args->toArray());
        return new ListPublisherAssociationsResponse($result->toArray());
    }
}
