<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateRouterInput;

trait UpdateRouterInputTrait
{
    /**
     * @param UpdateRouterInputRequest $args
     * @return UpdateRouterInputResponse
     */
    public function updateRouterInput(UpdateRouterInputRequest $args)
    {
        $result = parent::updateRouterInput($args->toArray());
        return new UpdateRouterInputResponse($result->toArray());
    }
}
