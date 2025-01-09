<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 * @property string $formName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class TimeSeriesDataPointFormInput extends Shape
{
    /**
     * @param array{
     *     content?: string,
     *     formName: string,
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
