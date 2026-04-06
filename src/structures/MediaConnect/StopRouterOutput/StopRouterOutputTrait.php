<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopRouterOutput;

trait StopRouterOutputTrait
{
    /**
     * @param StopRouterOutputRequest $args
     * @return StopRouterOutputResponse
     */
    public function stopRouterOutput(StopRouterOutputRequest $args)
    {
        $result = parent::stopRouterOutput($args->toArray());
        return new StopRouterOutputResponse($result->toArray());
    }
}
