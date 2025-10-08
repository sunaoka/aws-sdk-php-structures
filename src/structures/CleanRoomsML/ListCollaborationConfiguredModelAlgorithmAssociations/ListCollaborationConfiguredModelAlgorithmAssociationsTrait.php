<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationConfiguredModelAlgorithmAssociations;

trait ListCollaborationConfiguredModelAlgorithmAssociationsTrait
{
    /**
     * @param ListCollaborationConfiguredModelAlgorithmAssociationsRequest $args
     * @return ListCollaborationConfiguredModelAlgorithmAssociationsResponse
     */
    public function listCollaborationConfiguredModelAlgorithmAssociations(
        ListCollaborationConfiguredModelAlgorithmAssociationsRequest $args,
    ) {
        $result = parent::listCollaborationConfiguredModelAlgorithmAssociations($args->toArray());
        return new ListCollaborationConfiguredModelAlgorithmAssociationsResponse($result->toArray());
    }
}
