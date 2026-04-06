<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterInput;

trait CreateRouterInputTrait
{
    /**
     * @param CreateRouterInputRequest $args
     * @return CreateRouterInputResponse
     */
    public function createRouterInput(CreateRouterInputRequest $args)
    {
        $result = parent::createRouterInput($args->toArray());
        return new CreateRouterInputResponse($result->toArray());
    }
}
