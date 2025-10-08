<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateInstanceStorageConfig;

trait UpdateInstanceStorageConfigTrait
{
    /**
     * @param UpdateInstanceStorageConfigRequest $args
     * @return void
     */
    public function updateInstanceStorageConfig(UpdateInstanceStorageConfigRequest $args)
    {
        parent::updateInstanceStorageConfig($args->toArray());
    }
}
