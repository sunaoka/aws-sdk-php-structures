<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaceAssociations;

trait SearchWorkspaceAssociationsTrait
{
    /**
     * @param SearchWorkspaceAssociationsRequest $args
     * @return SearchWorkspaceAssociationsResponse
     */
    public function searchWorkspaceAssociations(SearchWorkspaceAssociationsRequest $args)
    {
        $result = parent::searchWorkspaceAssociations($args->toArray());
        return new SearchWorkspaceAssociationsResponse($result->toArray());
    }
}
