<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DisableDirectory;

trait DisableDirectoryTrait
{
    /**
     * @param DisableDirectoryRequest $args
     * @return DisableDirectoryResponse
     */
    public function disableDirectory(DisableDirectoryRequest $args)
    {
        $result = parent::disableDirectory($args->toArray());
        return new DisableDirectoryResponse($result->toArray());
    }
}
