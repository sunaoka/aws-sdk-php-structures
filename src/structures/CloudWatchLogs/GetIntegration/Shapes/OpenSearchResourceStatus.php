<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'NOT_FOUND'|'ERROR'|null $status
 * @property string|null $statusMessage
 */
class OpenSearchResourceStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'NOT_FOUND'|'ERROR'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
