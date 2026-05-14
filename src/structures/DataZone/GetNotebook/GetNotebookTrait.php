<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebook;

trait GetNotebookTrait
{
    /**
     * @param GetNotebookRequest $args
     * @return GetNotebookResponse
     */
    public function getNotebook(GetNotebookRequest $args)
    {
        $result = parent::getNotebook($args->toArray());
        return new GetNotebookResponse($result->toArray());
    }
}
