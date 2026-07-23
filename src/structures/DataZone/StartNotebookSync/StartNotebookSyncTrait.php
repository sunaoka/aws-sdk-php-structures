<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookSync;

trait StartNotebookSyncTrait
{
    /**
     * @param StartNotebookSyncRequest $args
     * @return StartNotebookSyncResponse
     */
    public function startNotebookSync(StartNotebookSyncRequest $args)
    {
        $result = parent::startNotebookSync($args->toArray());
        return new StartNotebookSyncResponse($result->toArray());
    }
}
