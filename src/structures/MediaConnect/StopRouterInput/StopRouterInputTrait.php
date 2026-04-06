<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopRouterInput;

trait StopRouterInputTrait
{
    /**
     * @param StopRouterInputRequest $args
     * @return StopRouterInputResponse
     */
    public function stopRouterInput(StopRouterInputRequest $args)
    {
        $result = parent::stopRouterInput($args->toArray());
        return new StopRouterInputResponse($result->toArray());
    }
}
