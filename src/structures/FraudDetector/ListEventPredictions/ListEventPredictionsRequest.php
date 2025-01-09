<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterCondition $eventId
 * @property Shapes\FilterCondition $eventType
 * @property Shapes\FilterCondition $detectorId
 * @property Shapes\FilterCondition $detectorVersionId
 * @property Shapes\PredictionTimeRange $predictionTimeRange
 * @property string $nextToken
 * @property int $maxResults
 */
class ListEventPredictionsRequest extends Request
{
    /**
     * @param array{
     *     eventId?: Shapes\FilterCondition,
     *     eventType?: Shapes\FilterCondition,
     *     detectorId?: Shapes\FilterCondition,
     *     detectorVersionId?: Shapes\FilterCondition,
     *     predictionTimeRange?: Shapes\PredictionTimeRange,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
