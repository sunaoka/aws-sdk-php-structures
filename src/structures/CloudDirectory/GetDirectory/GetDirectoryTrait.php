<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetDirectory;

trait GetDirectoryTrait
{
    /**
     * @param GetDirectoryRequest $args
     * @return GetDirectoryResponse
     */
    public function getDirectory(GetDirectoryRequest $args)
    {
        $result = parent::getDirectory($args->toArray());
        return new GetDirectoryResponse($result->toArray());
    }
}
