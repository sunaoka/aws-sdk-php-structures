<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableRouteServerPropagation;

trait EnableRouteServerPropagationTrait
{
    /**
     * @param EnableRouteServerPropagationRequest $args
     * @return EnableRouteServerPropagationResponse
     */
    public function enableRouteServerPropagation(EnableRouteServerPropagationRequest $args)
    {
        $result = parent::enableRouteServerPropagation($args->toArray());
        return new EnableRouteServerPropagationResponse($result->toArray());
    }
}
