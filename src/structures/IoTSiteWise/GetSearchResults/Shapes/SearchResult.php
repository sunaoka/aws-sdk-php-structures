<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetSearchResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $searchId
 * @property string $workspaceName
 * @property string $datasetId
 * @property string $timeSeriesId
 * @property TimeInNanos $startTimestamp
 * @property TimeInNanos $endTimestamp
 * @property TimeInNanos $topTimestamp
 * @property float $score
 */
class SearchResult extends Shape
{
    /**
     * @param array{
     *     searchId: string,
     *     workspaceName: string,
     *     datasetId: string,
     *     timeSeriesId: string,
     *     startTimestamp: TimeInNanos,
     *     endTimestamp: TimeInNanos,
     *     topTimestamp: TimeInNanos,
     *     score: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
