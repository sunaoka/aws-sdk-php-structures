<?php

namespace Sunaoka\Aws\Structures\Iot\CancelJobExecution;

trait CancelJobExecutionTrait
{
    /**
     * @param CancelJobExecutionRequest $args
     * @return void
     */
    public function cancelJobExecution(CancelJobExecutionRequest $args)
    {
        parent::cancelJobExecution($args->toArray());
    }
}
