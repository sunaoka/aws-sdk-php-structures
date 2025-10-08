<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations;

trait ListAssociationsTrait
{
    /**
     * @param ListAssociationsRequest $args
     * @return ListAssociationsResponse
     */
    public function listAssociations(ListAssociationsRequest $args)
    {
        $result = parent::listAssociations($args->toArray());
        return new ListAssociationsResponse($result->toArray());
    }
}
