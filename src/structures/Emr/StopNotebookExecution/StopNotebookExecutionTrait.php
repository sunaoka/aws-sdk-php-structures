<?php

namespace Sunaoka\Aws\Structures\Emr\StopNotebookExecution;

trait StopNotebookExecutionTrait
{
    /**
     * @param StopNotebookExecutionRequest $args
     * @return void
     */
    public function stopNotebookExecution(StopNotebookExecutionRequest $args)
    {
        parent::stopNotebookExecution($args->toArray());
    }
}
