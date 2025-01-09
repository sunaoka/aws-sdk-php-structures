<?php

namespace Sunaoka\Aws\Structures\Ecr\PutReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReplicationConfiguration $replicationConfiguration
 */
class PutReplicationConfigurationRequest extends Request
{
    /**
     * @param array{replicationConfiguration: Shapes\ReplicationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
