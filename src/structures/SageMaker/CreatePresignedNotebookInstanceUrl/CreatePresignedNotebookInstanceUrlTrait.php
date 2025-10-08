<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePresignedNotebookInstanceUrl;

trait CreatePresignedNotebookInstanceUrlTrait
{
    /**
     * @param CreatePresignedNotebookInstanceUrlRequest $args
     * @return CreatePresignedNotebookInstanceUrlResponse
     */
    public function createPresignedNotebookInstanceUrl(CreatePresignedNotebookInstanceUrlRequest $args)
    {
        $result = parent::createPresignedNotebookInstanceUrl($args->toArray());
        return new CreatePresignedNotebookInstanceUrlResponse($result->toArray());
    }
}
