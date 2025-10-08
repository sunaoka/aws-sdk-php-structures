<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookSessions;

trait ListNotebookSessionsTrait
{
    /**
     * @param ListNotebookSessionsRequest $args
     * @return ListNotebookSessionsResponse
     */
    public function listNotebookSessions(ListNotebookSessionsRequest $args)
    {
        $result = parent::listNotebookSessions($args->toArray());
        return new ListNotebookSessionsResponse($result->toArray());
    }
}
