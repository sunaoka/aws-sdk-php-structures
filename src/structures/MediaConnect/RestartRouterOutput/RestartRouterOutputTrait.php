<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RestartRouterOutput;

trait RestartRouterOutputTrait
{
    /**
     * @param RestartRouterOutputRequest $args
     * @return RestartRouterOutputResponse
     */
    public function restartRouterOutput(RestartRouterOutputRequest $args)
    {
        $result = parent::restartRouterOutput($args->toArray());
        return new RestartRouterOutputResponse($result->toArray());
    }
}
