<?php

namespace Sunaoka\Aws\Structures\Connect\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROFICIENCIES' $TargetListType
 * @property list<Condition> $Conditions
 */
class ListCondition extends Shape
{
    /**
     * @param array{
     *     TargetListType?: 'PROFICIENCIES',
     *     Conditions?: list<Condition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
