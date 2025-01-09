<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $details
 * @property string $id
 * @property string $metadata
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $type
 */
class RumEvent extends Shape
{
    /**
     * @param array{
     *     details: string,
     *     id: string,
     *     metadata?: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
