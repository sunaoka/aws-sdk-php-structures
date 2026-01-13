<?php

namespace Sunaoka\Aws\Structures\DataZone\GetTimeSeriesDataPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formName
 * @property string $typeIdentifier
 * @property string|null $typeRevision
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string|null $content
 * @property string|null $id
 */
class TimeSeriesDataPointFormOutput extends Shape
{
    /**
     * @param array{
     *     formName: string,
     *     typeIdentifier: string,
     *     typeRevision?: string|null,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     content?: string|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
