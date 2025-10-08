<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations;

trait ListIdNamespaceAssociationsTrait
{
    /**
     * @param ListIdNamespaceAssociationsRequest $args
     * @return ListIdNamespaceAssociationsResponse
     */
    public function listIdNamespaceAssociations(ListIdNamespaceAssociationsRequest $args)
    {
        $result = parent::listIdNamespaceAssociations($args->toArray());
        return new ListIdNamespaceAssociationsResponse($result->toArray());
    }
}
