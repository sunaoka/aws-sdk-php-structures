<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConsolidatedPolicyList|null $list
 * @property ConsolidatedPolicyAggregation|null $aggregation
 * @property ConsolidatedPolicyCustom|null $custom
 */
class ConsolidatedPolicyV1 extends Shape
{
    /**
     * @param array{
     *     list?: ConsolidatedPolicyList|null,
     *     aggregation?: ConsolidatedPolicyAggregation|null,
     *     custom?: ConsolidatedPolicyCustom|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
