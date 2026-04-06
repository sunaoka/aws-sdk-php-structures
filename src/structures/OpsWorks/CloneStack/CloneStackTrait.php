<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CloneStack;

trait CloneStackTrait
{
    /**
     * @param CloneStackRequest $args
     * @return CloneStackResponse
     */
    public function cloneStack(CloneStackRequest $args)
    {
        $result = parent::cloneStack($args->toArray());
        return new CloneStackResponse($result->toArray());
    }
}
