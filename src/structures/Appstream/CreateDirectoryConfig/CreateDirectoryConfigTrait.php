<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateDirectoryConfig;

trait CreateDirectoryConfigTrait
{
    /**
     * @param CreateDirectoryConfigRequest $args
     * @return CreateDirectoryConfigResponse
     */
    public function createDirectoryConfig(CreateDirectoryConfigRequest $args)
    {
        $result = parent::createDirectoryConfig($args->toArray());
        return new CreateDirectoryConfigResponse($result->toArray());
    }
}
