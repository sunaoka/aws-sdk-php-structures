<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput;

trait GetRouterOutputTrait
{
    /**
     * @param GetRouterOutputRequest $args
     * @return GetRouterOutputResponse
     */
    public function getRouterOutput(GetRouterOutputRequest $args)
    {
        $result = parent::getRouterOutput($args->toArray());
        return new GetRouterOutputResponse($result->toArray());
    }
}
