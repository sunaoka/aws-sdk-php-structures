<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterInput;

trait DeleteRouterInputTrait
{
    /**
     * @param DeleteRouterInputRequest $args
     * @return DeleteRouterInputResponse
     */
    public function deleteRouterInput(DeleteRouterInputRequest $args)
    {
        $result = parent::deleteRouterInput($args->toArray());
        return new DeleteRouterInputResponse($result->toArray());
    }
}
