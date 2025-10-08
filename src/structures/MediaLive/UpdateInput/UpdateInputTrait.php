<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInput;

trait UpdateInputTrait
{
    /**
     * @param UpdateInputRequest $args
     * @return UpdateInputResponse
     */
    public function updateInput(UpdateInputRequest $args)
    {
        $result = parent::updateInput($args->toArray());
        return new UpdateInputResponse($result->toArray());
    }
}
