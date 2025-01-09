<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentSummary
 * @property string $formName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class TimeSeriesDataPointSummaryFormOutput extends Shape
{
    /**
     * @param array{
     *     contentSummary?: string,
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
