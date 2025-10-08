<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe;

trait CreatePipeTrait
{
    /**
     * @param CreatePipeRequest $args
     * @return CreatePipeResponse
     */
    public function createPipe(CreatePipeRequest $args)
    {
        $result = parent::createPipe($args->toArray());
        return new CreatePipeResponse($result->toArray());
    }
}
