<?php

namespace Sunaoka\Aws\Structures\DataZone\StopNotebookRun;

trait StopNotebookRunTrait
{
    /**
     * @param StopNotebookRunRequest $args
     * @return StopNotebookRunResponse
     */
    public function stopNotebookRun(StopNotebookRunRequest $args)
    {
        $result = parent::stopNotebookRun($args->toArray());
        return new StopNotebookRunResponse($result->toArray());
    }
}
