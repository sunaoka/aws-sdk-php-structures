<?php

namespace Sunaoka\Aws\Structures\QConnect\ListContentAssociations;

trait ListContentAssociationsTrait
{
    /**
     * @param ListContentAssociationsRequest $args
     * @return ListContentAssociationsResponse
     */
    public function listContentAssociations(ListContentAssociationsRequest $args)
    {
        $result = parent::listContentAssociations($args->toArray());
        return new ListContentAssociationsResponse($result->toArray());
    }
}
