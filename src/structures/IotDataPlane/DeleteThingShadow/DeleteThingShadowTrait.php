<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\DeleteThingShadow;

trait DeleteThingShadowTrait
{
    /**
     * @param DeleteThingShadowRequest $args
     * @return DeleteThingShadowResponse
     */
    public function deleteThingShadow(DeleteThingShadowRequest $args)
    {
        $result = parent::deleteThingShadow($args->toArray());
        return new DeleteThingShadowResponse($result->toArray());
    }
}
