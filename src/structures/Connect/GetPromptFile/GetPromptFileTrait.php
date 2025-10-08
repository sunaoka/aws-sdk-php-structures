<?php

namespace Sunaoka\Aws\Structures\Connect\GetPromptFile;

trait GetPromptFileTrait
{
    /**
     * @param GetPromptFileRequest $args
     * @return GetPromptFileResponse
     */
    public function getPromptFile(GetPromptFileRequest $args)
    {
        $result = parent::getPromptFile($args->toArray());
        return new GetPromptFileResponse($result->toArray());
    }
}
