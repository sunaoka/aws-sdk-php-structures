<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartRouterInput;

trait StartRouterInputTrait
{
    /**
     * @param StartRouterInputRequest $args
     * @return StartRouterInputResponse
     */
    public function startRouterInput(StartRouterInputRequest $args)
    {
        $result = parent::startRouterInput($args->toArray());
        return new StartRouterInputResponse($result->toArray());
    }
}
