<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactRoutingData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Value
 * @property float $ProficiencyLevel
 * @property Range $Range
 * @property MatchCriteria $MatchCriteria
 * @property string $ComparisonOperator
 */
class AttributeCondition extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: string,
     *     ProficiencyLevel?: float,
     *     Range?: Range,
     *     MatchCriteria?: MatchCriteria,
     *     ComparisonOperator?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
