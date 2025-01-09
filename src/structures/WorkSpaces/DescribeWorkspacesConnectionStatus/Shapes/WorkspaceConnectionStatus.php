<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesConnectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 * @property 'CONNECTED'|'DISCONNECTED'|'UNKNOWN' $ConnectionState
 * @property \Aws\Api\DateTimeResult $ConnectionStateCheckTimestamp
 * @property \Aws\Api\DateTimeResult $LastKnownUserConnectionTimestamp
 */
class WorkspaceConnectionStatus extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string,
     *     ConnectionState?: 'CONNECTED'|'DISCONNECTED'|'UNKNOWN',
     *     ConnectionStateCheckTimestamp?: \Aws\Api\DateTimeResult,
     *     LastKnownUserConnectionTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
