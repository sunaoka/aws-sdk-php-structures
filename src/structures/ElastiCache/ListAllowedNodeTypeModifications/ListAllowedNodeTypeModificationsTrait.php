<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ListAllowedNodeTypeModifications;

trait ListAllowedNodeTypeModificationsTrait
{
    /**
     * @param ListAllowedNodeTypeModificationsRequest $args
     * @return ListAllowedNodeTypeModificationsResponse
     */
    public function listAllowedNodeTypeModifications(ListAllowedNodeTypeModificationsRequest $args)
    {
        $result = parent::listAllowedNodeTypeModifications($args->toArray());
        return new ListAllowedNodeTypeModificationsResponse($result->toArray());
    }
}
