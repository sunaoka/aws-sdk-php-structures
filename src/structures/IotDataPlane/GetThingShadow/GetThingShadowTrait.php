<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetThingShadow;

trait GetThingShadowTrait
{
    /**
     * @param GetThingShadowRequest $args
     * @return GetThingShadowResponse
     */
    public function getThingShadow(GetThingShadowRequest $args)
    {
        $result = parent::getThingShadow($args->toArray());
        return new GetThingShadowResponse($result->toArray());
    }
}
