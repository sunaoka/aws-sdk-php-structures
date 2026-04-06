<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPrefetchSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $DynamicVariables
 * @property int|null $DelayAfterAvailEndSeconds
 * @property 'RETRIEVAL_WINDOW'|'TPS'|null $TrafficShapingType
 * @property TrafficShapingRetrievalWindow|null $TrafficShapingRetrievalWindow
 * @property TrafficShapingTpsConfiguration|null $TrafficShapingTpsConfiguration
 */
class RecurringRetrieval extends Shape
{
    /**
     * @param array{
     *     DynamicVariables?: array<string, string>|null,
     *     DelayAfterAvailEndSeconds?: int|null,
     *     TrafficShapingType?: 'RETRIEVAL_WINDOW'|'TPS'|null,
     *     TrafficShapingRetrievalWindow?: TrafficShapingRetrievalWindow|null,
     *     TrafficShapingTpsConfiguration?: TrafficShapingTpsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
