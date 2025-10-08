<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteReplicationConfiguration;

trait DeleteReplicationConfigurationTrait
{
    /**
     * @param DeleteReplicationConfigurationRequest $args
     * @return void
     */
    public function deleteReplicationConfiguration(DeleteReplicationConfigurationRequest $args)
    {
        parent::deleteReplicationConfiguration($args->toArray());
    }
}
