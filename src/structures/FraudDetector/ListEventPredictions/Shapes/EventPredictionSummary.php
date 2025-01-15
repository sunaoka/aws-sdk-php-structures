<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventId
 * @property string|null $eventTypeName
 * @property string|null $eventTimestamp
 * @property string|null $predictionTimestamp
 * @property string|null $detectorId
 * @property string|null $detectorVersionId
 */
class EventPredictionSummary extends Shape
{
    /**
     * @param array{
     *     eventId?: string|null,
     *     eventTypeName?: string|null,
     *     eventTimestamp?: string|null,
     *     predictionTimestamp?: string|null,
     *     detectorId?: string|null,
     *     detectorVersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
