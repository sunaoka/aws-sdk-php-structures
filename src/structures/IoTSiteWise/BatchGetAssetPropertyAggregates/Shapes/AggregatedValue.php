<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'GOOD'|'BAD'|'UNCERTAIN'|null $quality
 * @property Aggregates $value
 */
class AggregatedValue extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     quality?: 'GOOD'|'BAD'|'UNCERTAIN'|null,
     *     value: Aggregates
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
