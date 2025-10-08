<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe;

trait UpdatePipeTrait
{
    /**
     * @param UpdatePipeRequest $args
     * @return UpdatePipeResponse
     */
    public function updatePipe(UpdatePipeRequest $args)
    {
        $result = parent::updatePipe($args->toArray());
        return new UpdatePipeResponse($result->toArray());
    }
}
