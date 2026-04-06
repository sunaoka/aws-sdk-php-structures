<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput;

trait GetRouterInputTrait
{
    /**
     * @param GetRouterInputRequest $args
     * @return GetRouterInputResponse
     */
    public function getRouterInput(GetRouterInputRequest $args)
    {
        $result = parent::getRouterInput($args->toArray());
        return new GetRouterInputResponse($result->toArray());
    }
}
