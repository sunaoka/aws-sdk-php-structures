<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROFICIENCIES'|null $TargetListType
 * @property list<Condition>|null $Conditions
 */
class ListCondition extends Shape
{
    /**
     * @param array{
     *     TargetListType?: 'PROFICIENCIES'|null,
     *     Conditions?: list<Condition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
