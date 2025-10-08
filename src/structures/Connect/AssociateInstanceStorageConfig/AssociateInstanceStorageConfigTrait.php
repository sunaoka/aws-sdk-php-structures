<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateInstanceStorageConfig;

trait AssociateInstanceStorageConfigTrait
{
    /**
     * @param AssociateInstanceStorageConfigRequest $args
     * @return AssociateInstanceStorageConfigResponse
     */
    public function associateInstanceStorageConfig(AssociateInstanceStorageConfigRequest $args)
    {
        $result = parent::associateInstanceStorageConfig($args->toArray());
        return new AssociateInstanceStorageConfigResponse($result->toArray());
    }
}
