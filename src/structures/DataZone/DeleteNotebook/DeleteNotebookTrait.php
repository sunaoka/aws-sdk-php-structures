<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteNotebook;

trait DeleteNotebookTrait
{
    /**
     * @param DeleteNotebookRequest $args
     * @return DeleteNotebookResponse
     */
    public function deleteNotebook(DeleteNotebookRequest $args)
    {
        $result = parent::deleteNotebook($args->toArray());
        return new DeleteNotebookResponse($result->toArray());
    }
}
