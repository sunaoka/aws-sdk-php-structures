<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateNotebook;

trait UpdateNotebookTrait
{
    /**
     * @param UpdateNotebookRequest $args
     * @return UpdateNotebookResponse
     */
    public function updateNotebook(UpdateNotebookRequest $args)
    {
        $result = parent::updateNotebook($args->toArray());
        return new UpdateNotebookResponse($result->toArray());
    }
}
