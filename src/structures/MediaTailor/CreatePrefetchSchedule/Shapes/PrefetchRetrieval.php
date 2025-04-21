<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreatePrefetchSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $DynamicVariables
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property 'RETRIEVAL_WINDOW'|null $TrafficShapingType
 * @property TrafficShapingRetrievalWindow|null $TrafficShapingRetrievalWindow
 */
class PrefetchRetrieval extends Shape
{
    /**
     * @param array{
     *     DynamicVariables?: array<string, string>|null,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     TrafficShapingType?: 'RETRIEVAL_WINDOW'|null,
     *     TrafficShapingRetrievalWindow?: TrafficShapingRetrievalWindow|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
