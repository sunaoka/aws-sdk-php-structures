<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_ARN'|'ROLE_ARN'|'LAST_MODIFIED' $Field
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|'IN'|'BETWEEN' $ComparisonOperator
 * @property list<string> $StringValueList
 */
class FilterCondition extends Shape
{
    /**
     * @param array{
     *     Field?: 'RESOURCE_ARN'|'ROLE_ARN'|'LAST_MODIFIED',
     *     ComparisonOperator?: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|'IN'|'BETWEEN',
     *     StringValueList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
