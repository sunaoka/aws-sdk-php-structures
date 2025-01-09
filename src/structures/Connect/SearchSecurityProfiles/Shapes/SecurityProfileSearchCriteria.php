<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SecurityProfileSearchCriteria> $OrConditions
 * @property list<SecurityProfileSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class SecurityProfileSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<SecurityProfileSearchCriteria>,
     *     AndConditions?: list<SecurityProfileSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
