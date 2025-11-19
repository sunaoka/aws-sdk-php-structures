<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $type
 * @property string|null $metadata
 * @property string $details
 */
class RumEvent extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     type: string,
     *     metadata?: string|null,
     *     details: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
