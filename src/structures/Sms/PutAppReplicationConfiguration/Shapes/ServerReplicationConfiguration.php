<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server $server
 * @property ServerReplicationParameters $serverReplicationParameters
 */
class ServerReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server,
     *     serverReplicationParameters?: ServerReplicationParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
