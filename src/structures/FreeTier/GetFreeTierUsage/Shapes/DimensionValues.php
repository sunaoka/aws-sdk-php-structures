<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE'|'OPERATION'|'USAGE_TYPE'|'REGION'|'FREE_TIER_TYPE'|'DESCRIPTION'|'USAGE_PERCENTAGE' $Key
 * @property list<string> $Values
 * @property list<'EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'> $MatchOptions
 */
class DimensionValues extends Shape
{
    /**
     * @param array{
     *     Key: 'SERVICE'|'OPERATION'|'USAGE_TYPE'|'REGION'|'FREE_TIER_TYPE'|'DESCRIPTION'|'USAGE_PERCENTAGE',
     *     Values: list<string>,
     *     MatchOptions: list<'EQUALS'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'GREATER_THAN_OR_EQUAL'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
