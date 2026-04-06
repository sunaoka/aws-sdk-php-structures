<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property float|null $ProficiencyLevel
 * @property Range|null $Range
 * @property MatchCriteria|null $MatchCriteria
 * @property string|null $ComparisonOperator
 */
class AttributeCondition extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     ProficiencyLevel?: float|null,
     *     Range?: Range|null,
     *     MatchCriteria?: MatchCriteria|null,
     *     ComparisonOperator?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
