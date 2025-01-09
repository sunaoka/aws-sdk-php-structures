<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspaceId
 * @property OpenSearchResourceStatus $status
 */
class OpenSearchWorkspace extends Shape
{
    /**
     * @param array{
     *     workspaceId?: string,
     *     status?: OpenSearchResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
