<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookRun;

trait StartNotebookRunTrait
{
    /**
     * @param StartNotebookRunRequest $args
     * @return StartNotebookRunResponse
     */
    public function startNotebookRun(StartNotebookRunRequest $args)
    {
        $result = parent::startNotebookRun($args->toArray());
        return new StartNotebookRunResponse($result->toArray());
    }
}
