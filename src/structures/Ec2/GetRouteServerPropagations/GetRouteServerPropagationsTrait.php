<?php

namespace Sunaoka\Aws\Structures\Ec2\GetRouteServerPropagations;

trait GetRouteServerPropagationsTrait
{
    /**
     * @param GetRouteServerPropagationsRequest $args
     * @return GetRouteServerPropagationsResponse
     */
    public function getRouteServerPropagations(GetRouteServerPropagationsRequest $args)
    {
        $result = parent::getRouteServerPropagations($args->toArray());
        return new GetRouteServerPropagationsResponse($result->toArray());
    }
}
