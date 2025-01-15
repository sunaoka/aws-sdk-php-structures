<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverGroupId
 * @property list<ServerReplicationConfiguration>|null $serverReplicationConfigurations
 */
class ServerGroupReplicationConfiguration extends Shape
{
    /**
     * @param array{
     *     serverGroupId?: string|null,
     *     serverReplicationConfigurations?: list<ServerReplicationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
