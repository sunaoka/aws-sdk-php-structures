<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociationVersions;

trait ListAssociationVersionsTrait
{
    /**
     * @param ListAssociationVersionsRequest $args
     * @return ListAssociationVersionsResponse
     */
    public function listAssociationVersions(ListAssociationVersionsRequest $args)
    {
        $result = parent::listAssociationVersions($args->toArray());
        return new ListAssociationVersionsResponse($result->toArray());
    }
}
