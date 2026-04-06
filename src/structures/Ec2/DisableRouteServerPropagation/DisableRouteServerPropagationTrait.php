<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableRouteServerPropagation;

trait DisableRouteServerPropagationTrait
{
    /**
     * @param DisableRouteServerPropagationRequest $args
     * @return DisableRouteServerPropagationResponse
     */
    public function disableRouteServerPropagation(DisableRouteServerPropagationRequest $args)
    {
        $result = parent::disableRouteServerPropagation($args->toArray());
        return new DisableRouteServerPropagationResponse($result->toArray());
    }
}
