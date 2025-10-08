<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\UpdateThingShadow;

trait UpdateThingShadowTrait
{
    /**
     * @param UpdateThingShadowRequest $args
     * @return UpdateThingShadowResponse
     */
    public function updateThingShadow(UpdateThingShadowRequest $args)
    {
        $result = parent::updateThingShadow($args->toArray());
        return new UpdateThingShadowResponse($result->toArray());
    }
}
