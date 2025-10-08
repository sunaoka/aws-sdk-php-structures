<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerAssociations;

trait GetRouteServerAssociationsTrait
{
    /**
     * @param GetRouteServerAssociationsRequest $args
     * @return GetRouteServerAssociationsResponse
     */
    public function getRouteServerAssociations(GetRouteServerAssociationsRequest $args)
    {
        $result = parent::getRouteServerAssociations($args->toArray());
        return new GetRouteServerAssociationsResponse($result->toArray());
    }
}
