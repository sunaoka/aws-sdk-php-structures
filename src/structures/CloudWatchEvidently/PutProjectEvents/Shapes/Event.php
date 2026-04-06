<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\PutProjectEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'aws.evidently.evaluation'|'aws.evidently.custom' $type
 */
class Event extends Shape
{
    /**
     * @param array{
     *     data: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     type: 'aws.evidently.evaluation'|'aws.evidently.custom'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
