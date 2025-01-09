<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property string $eventTypeName
 * @property string $eventTimestamp
 * @property string $predictionTimestamp
 * @property string $detectorId
 * @property string $detectorVersionId
 */
class EventPredictionSummary extends Shape
{
    /**
     * @param array{
     *     eventId?: string,
     *     eventTypeName?: string,
     *     eventTimestamp?: string,
     *     predictionTimestamp?: string,
     *     detectorId?: string,
     *     detectorVersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
