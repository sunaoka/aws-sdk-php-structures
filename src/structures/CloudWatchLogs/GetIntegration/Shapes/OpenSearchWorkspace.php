<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workspaceId
 * @property OpenSearchResourceStatus|null $status
 */
class OpenSearchWorkspace extends Shape
{
    /**
     * @param array{
     *     workspaceId?: string|null,
     *     status?: OpenSearchResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
