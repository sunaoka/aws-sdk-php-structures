<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyReplicationGroupShardConfiguration;

trait ModifyReplicationGroupShardConfigurationTrait
{
    /**
     * @param ModifyReplicationGroupShardConfigurationRequest $args
     * @return ModifyReplicationGroupShardConfigurationResponse
     */
    public function modifyReplicationGroupShardConfiguration(ModifyReplicationGroupShardConfigurationRequest $args)
    {
        $result = parent::modifyReplicationGroupShardConfiguration($args->toArray());
        return new ModifyReplicationGroupShardConfigurationResponse($result->toArray());
    }
}
