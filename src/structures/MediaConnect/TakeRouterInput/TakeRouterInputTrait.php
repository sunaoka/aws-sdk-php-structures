<?php

namespace Sunaoka\Aws\Structures\MediaConnect\TakeRouterInput;

trait TakeRouterInputTrait
{
    /**
     * @param TakeRouterInputRequest $args
     * @return TakeRouterInputResponse
     */
    public function takeRouterInput(TakeRouterInputRequest $args)
    {
        $result = parent::takeRouterInput($args->toArray());
        return new TakeRouterInputResponse($result->toArray());
    }
}
