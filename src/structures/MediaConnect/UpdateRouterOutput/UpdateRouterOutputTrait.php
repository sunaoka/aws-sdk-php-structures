<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterOutput;

trait UpdateRouterOutputTrait
{
    /**
     * @param UpdateRouterOutputRequest $args
     * @return UpdateRouterOutputResponse
     */
    public function updateRouterOutput(UpdateRouterOutputRequest $args)
    {
        $result = parent::updateRouterOutput($args->toArray());
        return new UpdateRouterOutputResponse($result->toArray());
    }
}
