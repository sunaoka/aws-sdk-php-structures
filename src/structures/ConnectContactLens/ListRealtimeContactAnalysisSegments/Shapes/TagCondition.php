<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TagKey
 * @property string|null $TagValue
 * @property 'EQUALS'|'NOT_EQUALS'|null $ComparisonType
 */
class TagCondition extends Shape
{
    /**
     * @param array{
     *     TagKey?: string|null,
     *     TagValue?: string|null,
     *     ComparisonType?: 'EQUALS'|'NOT_EQUALS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
