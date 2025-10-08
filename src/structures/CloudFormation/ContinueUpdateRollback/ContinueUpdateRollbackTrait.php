<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ContinueUpdateRollback;

trait ContinueUpdateRollbackTrait
{
    /**
     * @param ContinueUpdateRollbackRequest $args
     * @return ContinueUpdateRollbackResponse
     */
    public function continueUpdateRollback(ContinueUpdateRollbackRequest $args)
    {
        $result = parent::continueUpdateRollback($args->toArray());
        return new ContinueUpdateRollbackResponse($result->toArray());
    }
}
