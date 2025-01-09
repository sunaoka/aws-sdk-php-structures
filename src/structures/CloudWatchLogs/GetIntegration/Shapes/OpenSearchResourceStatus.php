<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'NOT_FOUND'|'ERROR' $status
 * @property string $statusMessage
 */
class OpenSearchResourceStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'NOT_FOUND'|'ERROR',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
