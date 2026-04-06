<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartRouterOutput;

trait StartRouterOutputTrait
{
    /**
     * @param StartRouterOutputRequest $args
     * @return StartRouterOutputResponse
     */
    public function startRouterOutput(StartRouterOutputRequest $args)
    {
        $result = parent::startRouterOutput($args->toArray());
        return new StartRouterOutputResponse($result->toArray());
    }
}
