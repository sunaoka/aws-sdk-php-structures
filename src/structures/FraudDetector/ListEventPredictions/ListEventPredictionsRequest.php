<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterCondition|null $eventId
 * @property Shapes\FilterCondition|null $eventType
 * @property Shapes\FilterCondition|null $detectorId
 * @property Shapes\FilterCondition|null $detectorVersionId
 * @property Shapes\PredictionTimeRange|null $predictionTimeRange
 * @property string|null $nextToken
 * @property int<50, 100>|null $maxResults
 */
class ListEventPredictionsRequest extends Request
{
    /**
     * @param array{
     *     eventId?: Shapes\FilterCondition|null,
     *     eventType?: Shapes\FilterCondition|null,
     *     detectorId?: Shapes\FilterCondition|null,
     *     detectorVersionId?: Shapes\FilterCondition|null,
     *     predictionTimeRange?: Shapes\PredictionTimeRange|null,
     *     nextToken?: string|null,
     *     maxResults?: int<50, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
