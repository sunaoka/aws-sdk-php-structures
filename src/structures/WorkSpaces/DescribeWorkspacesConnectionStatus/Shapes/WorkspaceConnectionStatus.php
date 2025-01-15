<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesConnectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 * @property 'CONNECTED'|'DISCONNECTED'|'UNKNOWN'|null $ConnectionState
 * @property \Aws\Api\DateTimeResult|null $ConnectionStateCheckTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastKnownUserConnectionTimestamp
 */
class WorkspaceConnectionStatus extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string|null,
     *     ConnectionState?: 'CONNECTED'|'DISCONNECTED'|'UNKNOWN'|null,
     *     ConnectionStateCheckTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastKnownUserConnectionTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
