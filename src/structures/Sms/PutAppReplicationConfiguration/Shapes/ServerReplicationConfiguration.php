<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server|null $server
 * @property ServerReplicationParameters|null $serverReplicationParameters
 */
class ServerReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     server?: Server|null,
     *     serverReplicationParameters?: ServerReplicationParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
