<?php

namespace Sunaoka\Aws\Structures\LambdaCore\UpdateRuntime;

trait UpdateRuntimeTrait
{
    /**
     * @param UpdateRuntimeRequest $args
     * @return UpdateRuntimeResponse
     */
    public function updateRuntime(UpdateRuntimeRequest $args)
    {
        $result = parent::updateRuntime($args->toArray());
        return new UpdateRuntimeResponse($result->toArray());
    }
}
