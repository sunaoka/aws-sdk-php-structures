<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput;

trait CreateRouterOutputTrait
{
    /**
     * @param CreateRouterOutputRequest $args
     * @return CreateRouterOutputResponse
     */
    public function createRouterOutput(CreateRouterOutputRequest $args)
    {
        $result = parent::createRouterOutput($args->toArray());
        return new CreateRouterOutputResponse($result->toArray());
    }
}
