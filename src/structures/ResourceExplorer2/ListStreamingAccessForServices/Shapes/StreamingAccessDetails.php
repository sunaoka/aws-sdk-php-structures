<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListStreamingAccessForServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServicePrincipal
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class StreamingAccessDetails extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal: string,
     *     CreatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
