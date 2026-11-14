<?php

namespace Sunaoka\Aws\Structures\LambdaCore\RestoreRuntime;

trait RestoreRuntimeTrait
{
    /**
     * @param RestoreRuntimeRequest $args
     * @return RestoreRuntimeResponse
     */
    public function restoreRuntime(RestoreRuntimeRequest $args)
    {
        $result = parent::restoreRuntime($args->toArray());
        return new RestoreRuntimeResponse($result->toArray());
    }
}
