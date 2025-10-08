<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ExecuteChangeSet;

trait ExecuteChangeSetTrait
{
    /**
     * @param ExecuteChangeSetRequest $args
     * @return ExecuteChangeSetResponse
     */
    public function executeChangeSet(ExecuteChangeSetRequest $args)
    {
        $result = parent::executeChangeSet($args->toArray());
        return new ExecuteChangeSetResponse($result->toArray());
    }
}
