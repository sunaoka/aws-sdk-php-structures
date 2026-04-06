<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredModelAlgorithmAssociations;

trait ListConfiguredModelAlgorithmAssociationsTrait
{
    /**
     * @param ListConfiguredModelAlgorithmAssociationsRequest $args
     * @return ListConfiguredModelAlgorithmAssociationsResponse
     */
    public function listConfiguredModelAlgorithmAssociations(ListConfiguredModelAlgorithmAssociationsRequest $args)
    {
        $result = parent::listConfiguredModelAlgorithmAssociations($args->toArray());
        return new ListConfiguredModelAlgorithmAssociationsResponse($result->toArray());
    }
}
