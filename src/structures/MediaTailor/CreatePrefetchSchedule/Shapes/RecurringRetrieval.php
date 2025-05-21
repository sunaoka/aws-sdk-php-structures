<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $DynamicVariables
 * @property int|null $DelayAfterAvailEndSeconds
 * @property 'RETRIEVAL_WINDOW'|null $TrafficShapingType
 * @property TrafficShapingRetrievalWindow|null $TrafficShapingRetrievalWindow
 */
class RecurringRetrieval extends Shape
{
    /**
     * @param array{
     *     DynamicVariables?: array<string, string>|null,
     *     DelayAfterAvailEndSeconds?: int|null,
     *     TrafficShapingType?: 'RETRIEVAL_WINDOW'|null,
     *     TrafficShapingRetrievalWindow?: TrafficShapingRetrievalWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
