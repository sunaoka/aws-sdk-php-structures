<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateDirectoryConfig;

trait UpdateDirectoryConfigTrait
{
    /**
     * @param UpdateDirectoryConfigRequest $args
     * @return UpdateDirectoryConfigResponse
     */
    public function updateDirectoryConfig(UpdateDirectoryConfigRequest $args)
    {
        $result = parent::updateDirectoryConfig($args->toArray());
        return new UpdateDirectoryConfigResponse($result->toArray());
    }
}
