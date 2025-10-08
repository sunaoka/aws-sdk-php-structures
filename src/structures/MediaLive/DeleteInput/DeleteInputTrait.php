<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteInput;

trait DeleteInputTrait
{
    /**
     * @param DeleteInputRequest $args
     * @return DeleteInputResponse
     */
    public function deleteInput(DeleteInputRequest $args)
    {
        $result = parent::deleteInput($args->toArray());
        return new DeleteInputResponse($result->toArray());
    }
}
