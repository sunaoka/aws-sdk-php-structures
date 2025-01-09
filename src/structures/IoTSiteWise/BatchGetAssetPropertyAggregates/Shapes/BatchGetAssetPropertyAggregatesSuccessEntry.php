<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryId
 * @property list<AggregatedValue> $aggregatedValues
 */
class BatchGetAssetPropertyAggregatesSuccessEntry extends Shape
{
    /**
     * @param array{
     *     entryId: string,
     *     aggregatedValues: list<AggregatedValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
