<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RoutingProfileSearchCriteria>|null $OrConditions
 * @property list<RoutingProfileSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class RoutingProfileSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<RoutingProfileSearchCriteria>|null,
     *     AndConditions?: list<RoutingProfileSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
