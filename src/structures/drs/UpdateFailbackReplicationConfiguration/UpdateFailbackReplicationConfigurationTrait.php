<?php

namespace Sunaoka\Aws\Structures\drs\UpdateFailbackReplicationConfiguration;

trait UpdateFailbackReplicationConfigurationTrait
{
    /**
     * @param UpdateFailbackReplicationConfigurationRequest $args
     * @return void
     */
    public function updateFailbackReplicationConfiguration(UpdateFailbackReplicationConfigurationRequest $args)
    {
        parent::updateFailbackReplicationConfiguration($args->toArray());
    }
}
