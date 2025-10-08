<?php

namespace Sunaoka\Aws\Structures\Emr\StartNotebookExecution;

trait StartNotebookExecutionTrait
{
    /**
     * @param StartNotebookExecutionRequest $args
     * @return StartNotebookExecutionResponse
     */
    public function startNotebookExecution(StartNotebookExecutionRequest $args)
    {
        $result = parent::startNotebookExecution($args->toArray());
        return new StartNotebookExecutionResponse($result->toArray());
    }
}
