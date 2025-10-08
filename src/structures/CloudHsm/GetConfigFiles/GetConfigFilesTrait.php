<?php

namespace Sunaoka\Aws\Structures\CloudHsm\GetConfigFiles;

trait GetConfigFilesTrait
{
    /**
     * @param GetConfigFilesRequest $args
     * @return GetConfigFilesResponse
     */
    public function getConfigFiles(GetConfigFilesRequest $args)
    {
        $result = parent::getConfigFiles($args->toArray());
        return new GetConfigFilesResponse($result->toArray());
    }
}
