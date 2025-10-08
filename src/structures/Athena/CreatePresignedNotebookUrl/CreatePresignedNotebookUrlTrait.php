<?php

namespace Sunaoka\Aws\Structures\Athena\CreatePresignedNotebookUrl;

trait CreatePresignedNotebookUrlTrait
{
    /**
     * @param CreatePresignedNotebookUrlRequest $args
     * @return CreatePresignedNotebookUrlResponse
     */
    public function createPresignedNotebookUrl(CreatePresignedNotebookUrlRequest $args)
    {
        $result = parent::createPresignedNotebookUrl($args->toArray());
        return new CreatePresignedNotebookUrlResponse($result->toArray());
    }
}
