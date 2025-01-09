<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverId
 * @property 'VIRTUAL_MACHINE' $serverType
 * @property VmServer $vmServer
 * @property string $replicationJobId
 * @property bool $replicationJobTerminated
 */
class Server extends Shape
{
    /**
     * @param array{
     *     serverId?: string,
     *     serverType?: 'VIRTUAL_MACHINE',
     *     vmServer?: VmServer,
     *     replicationJobId?: string,
     *     replicationJobTerminated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
