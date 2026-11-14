<?php

namespace Sunaoka\Aws\Structures\LambdaCore\DeleteRuntime;

trait DeleteRuntimeTrait
{
    /**
     * @param DeleteRuntimeRequest $args
     * @return DeleteRuntimeResponse
     */
    public function deleteRuntime(DeleteRuntimeRequest $args)
    {
        $result = parent::deleteRuntime($args->toArray());
        return new DeleteRuntimeResponse($result->toArray());
    }
}
