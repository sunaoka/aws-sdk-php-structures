<?php

namespace Sunaoka\Aws\Structures\Pipes\DeletePipe;

trait DeletePipeTrait
{
    /**
     * @param DeletePipeRequest $args
     * @return DeletePipeResponse
     */
    public function deletePipe(DeletePipeRequest $args)
    {
        $result = parent::deletePipe($args->toArray());
        return new DeletePipeResponse($result->toArray());
    }
}
