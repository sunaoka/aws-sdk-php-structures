<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJobExecution;

trait DeleteJobExecutionTrait
{
    /**
     * @param DeleteJobExecutionRequest $args
     * @return void
     */
    public function deleteJobExecution(DeleteJobExecutionRequest $args)
    {
        parent::deleteJobExecution($args->toArray());
    }
}
