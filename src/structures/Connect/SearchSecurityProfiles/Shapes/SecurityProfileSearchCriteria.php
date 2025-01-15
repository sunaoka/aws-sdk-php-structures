<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SecurityProfileSearchCriteria>|null $OrConditions
 * @property list<SecurityProfileSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class SecurityProfileSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<SecurityProfileSearchCriteria>|null,
     *     AndConditions?: list<SecurityProfileSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
