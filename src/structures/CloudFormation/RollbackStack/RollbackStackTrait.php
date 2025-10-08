<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RollbackStack;

trait RollbackStackTrait
{
    /**
     * @param RollbackStackRequest $args
     * @return RollbackStackResponse
     */
    public function rollbackStack(RollbackStackRequest $args)
    {
        $result = parent::rollbackStack($args->toArray());
        return new RollbackStackResponse($result->toArray());
    }
}
