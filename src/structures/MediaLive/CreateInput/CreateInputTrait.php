<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput;

trait CreateInputTrait
{
    /**
     * @param CreateInputRequest $args
     * @return CreateInputResponse
     */
    public function createInput(CreateInputRequest $args)
    {
        $result = parent::createInput($args->toArray());
        return new CreateInputResponse($result->toArray());
    }
}
