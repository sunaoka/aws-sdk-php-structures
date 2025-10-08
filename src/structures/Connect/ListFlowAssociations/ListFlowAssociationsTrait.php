<?php

namespace Sunaoka\Aws\Structures\Connect\ListFlowAssociations;

trait ListFlowAssociationsTrait
{
    /**
     * @param ListFlowAssociationsRequest $args
     * @return ListFlowAssociationsResponse
     */
    public function listFlowAssociations(ListFlowAssociationsRequest $args)
    {
        $result = parent::listFlowAssociations($args->toArray());
        return new ListFlowAssociationsResponse($result->toArray());
    }
}
