<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance;

trait GetSolFunctionInstanceTrait
{
    /**
     * @param GetSolFunctionInstanceRequest $args
     * @return GetSolFunctionInstanceResponse
     */
    public function getSolFunctionInstance(GetSolFunctionInstanceRequest $args)
    {
        $result = parent::getSolFunctionInstance($args->toArray());
        return new GetSolFunctionInstanceResponse($result->toArray());
    }
}
