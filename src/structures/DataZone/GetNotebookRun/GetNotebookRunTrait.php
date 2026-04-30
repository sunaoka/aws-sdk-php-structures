<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun;

trait GetNotebookRunTrait
{
    /**
     * @param GetNotebookRunRequest $args
     * @return GetNotebookRunResponse
     */
    public function getNotebookRun(GetNotebookRunRequest $args)
    {
        $result = parent::getNotebookRun($args->toArray());
        return new GetNotebookRunResponse($result->toArray());
    }
}
