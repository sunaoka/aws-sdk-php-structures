<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\EnableDirectory;

trait EnableDirectoryTrait
{
    /**
     * @param EnableDirectoryRequest $args
     * @return EnableDirectoryResponse
     */
    public function enableDirectory(EnableDirectoryRequest $args)
    {
        $result = parent::enableDirectory($args->toArray());
        return new EnableDirectoryResponse($result->toArray());
    }
}
