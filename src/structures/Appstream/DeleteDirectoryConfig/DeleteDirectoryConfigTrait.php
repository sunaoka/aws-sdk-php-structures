<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteDirectoryConfig;

trait DeleteDirectoryConfigTrait
{
    /**
     * @param DeleteDirectoryConfigRequest $args
     * @return DeleteDirectoryConfigResponse
     */
    public function deleteDirectoryConfig(DeleteDirectoryConfigRequest $args)
    {
        $result = parent::deleteDirectoryConfig($args->toArray());
        return new DeleteDirectoryConfigResponse($result->toArray());
    }
}
