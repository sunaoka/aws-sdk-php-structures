<?php

namespace Sunaoka\Aws\Structures\LambdaCore\GetRuntime;

trait GetRuntimeTrait
{
    /**
     * @param GetRuntimeRequest $args
     * @return GetRuntimeResponse
     */
    public function getRuntime(GetRuntimeRequest $args)
    {
        $result = parent::getRuntime($args->toArray());
        return new GetRuntimeResponse($result->toArray());
    }
}
