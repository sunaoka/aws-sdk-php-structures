<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListContainerAssociations;

trait ListContainerAssociationsTrait
{
    /**
     * @param ListContainerAssociationsRequest $args
     * @return ListContainerAssociationsResponse
     */
    public function listContainerAssociations(ListContainerAssociationsRequest $args)
    {
        $result = parent::listContainerAssociations($args->toArray());
        return new ListContainerAssociationsResponse($result->toArray());
    }
}
