<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RoutingProfileSearchCriteria> $OrConditions
 * @property list<RoutingProfileSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class RoutingProfileSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<RoutingProfileSearchCriteria>,
     *     AndConditions?: list<RoutingProfileSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
