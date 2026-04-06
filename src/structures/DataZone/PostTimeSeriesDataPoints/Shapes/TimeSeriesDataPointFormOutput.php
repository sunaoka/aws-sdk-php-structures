<?php

namespace Sunaoka\Aws\Structures\DataZone\PostTimeSeriesDataPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 * @property string $formName
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $typeIdentifier
 * @property string|null $typeRevision
 */
class TimeSeriesDataPointFormOutput extends Shape
{
    /**
     * @param array{
     *     content?: string|null,
     *     formName: string,
     *     id?: string|null,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     typeIdentifier: string,
     *     typeRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
