<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverGroupId
 * @property list<ServerReplicationConfiguration> $serverReplicationConfigurations
 */
class ServerGroupReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string,
     *     serverReplicationConfigurations?: list<ServerReplicationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
