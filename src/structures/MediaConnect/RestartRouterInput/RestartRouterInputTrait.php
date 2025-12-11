<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RestartRouterInput;

trait RestartRouterInputTrait
{
    /**
     * @param RestartRouterInputRequest $args
     * @return RestartRouterInputResponse
     */
    public function restartRouterInput(RestartRouterInputRequest $args)
    {
        $result = parent::restartRouterInput($args->toArray());
        return new RestartRouterInputResponse($result->toArray());
    }
}
