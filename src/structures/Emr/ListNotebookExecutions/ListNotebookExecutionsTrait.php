<?php

namespace Sunaoka\Aws\Structures\Emr\ListNotebookExecutions;

trait ListNotebookExecutionsTrait
{
    /**
     * @param ListNotebookExecutionsRequest $args
     * @return ListNotebookExecutionsResponse
     */
    public function listNotebookExecutions(ListNotebookExecutionsRequest $args)
    {
        $result = parent::listNotebookExecutions($args->toArray());
        return new ListNotebookExecutionsResponse($result->toArray());
    }
}
