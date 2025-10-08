<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRepositoryAssociations;

trait ListRepositoryAssociationsTrait
{
    /**
     * @param ListRepositoryAssociationsRequest $args
     * @return ListRepositoryAssociationsResponse
     */
    public function listRepositoryAssociations(ListRepositoryAssociationsRequest $args)
    {
        $result = parent::listRepositoryAssociations($args->toArray());
        return new ListRepositoryAssociationsResponse($result->toArray());
    }
}
