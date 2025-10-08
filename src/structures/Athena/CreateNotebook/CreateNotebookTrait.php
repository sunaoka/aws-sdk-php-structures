<?php

namespace Sunaoka\Aws\Structures\Athena\CreateNotebook;

trait CreateNotebookTrait
{
    /**
     * @param CreateNotebookRequest $args
     * @return CreateNotebookResponse
     */
    public function createNotebook(CreateNotebookRequest $args)
    {
        $result = parent::createNotebook($args->toArray());
        return new CreateNotebookResponse($result->toArray());
    }
}
