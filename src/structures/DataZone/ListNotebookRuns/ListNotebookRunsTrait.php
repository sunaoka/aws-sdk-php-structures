<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebookRuns;

trait ListNotebookRunsTrait
{
    /**
     * @param ListNotebookRunsRequest $args
     * @return ListNotebookRunsResponse
     */
    public function listNotebookRuns(ListNotebookRunsRequest $args)
    {
        $result = parent::listNotebookRuns($args->toArray());
        return new ListNotebookRunsResponse($result->toArray());
    }
}
