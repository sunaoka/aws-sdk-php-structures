<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property list<string>|null $Values
 * @property list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'|'GREATER_THAN_OR_EQUAL'>|null $MatchOptions
 */
class CostCategoryValues extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Values?: list<string>|null,
     *     MatchOptions?: list<'EQUALS'|'ABSENT'|'STARTS_WITH'|'ENDS_WITH'|'CONTAINS'|'CASE_SENSITIVE'|'CASE_INSENSITIVE'|'GREATER_THAN_OR_EQUAL'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
