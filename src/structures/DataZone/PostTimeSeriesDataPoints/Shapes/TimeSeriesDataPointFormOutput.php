<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $formName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class TimeSeriesDataPointFormOutput extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     formName: string,
     *     id?: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     typeIdentifier: string,
     *     typeRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
