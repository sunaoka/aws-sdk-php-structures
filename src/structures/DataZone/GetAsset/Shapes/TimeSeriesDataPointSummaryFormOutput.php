<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $formName
 * @property string $typeIdentifier
 * @property string|null $typeRevision
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property string|null $contentSummary
 * @property string|null $id
 */
class TimeSeriesDataPointSummaryFormOutput extends Shape
{
    /**
     * @param array{
     *     formName: string,
     *     typeIdentifier: string,
     *     typeRevision?: string|null,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     contentSummary?: string|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
