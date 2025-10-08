<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareAssociations;

trait GetResourceShareAssociationsTrait
{
    /**
     * @param GetResourceShareAssociationsRequest $args
     * @return GetResourceShareAssociationsResponse
     */
    public function getResourceShareAssociations(GetResourceShareAssociationsRequest $args)
    {
        $result = parent::getResourceShareAssociations($args->toArray());
        return new GetResourceShareAssociationsResponse($result->toArray());
    }
}
