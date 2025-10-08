<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ExecuteStackRefactor;

trait ExecuteStackRefactorTrait
{
    /**
     * @param ExecuteStackRefactorRequest $args
     * @return void
     */
    public function executeStackRefactor(ExecuteStackRefactorRequest $args)
    {
        parent::executeStackRefactor($args->toArray());
    }
}
