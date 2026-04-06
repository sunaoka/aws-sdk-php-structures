<?php

namespace Sunaoka\Aws\Structures\Sms\PutAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverId
 * @property 'VIRTUAL_MACHINE'|null $serverType
 * @property VmServer|null $vmServer
 * @property string|null $replicationJobId
 * @property bool|null $replicationJobTerminated
 */
class Server extends Shape
{
    /**
     * @param array{
     *     serverId?: string|null,
     *     serverType?: 'VIRTUAL_MACHINE'|null,
     *     vmServer?: VmServer|null,
     *     replicationJobId?: string|null,
     *     replicationJobTerminated?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
