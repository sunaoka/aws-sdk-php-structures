<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_ARN'|'ROLE_ARN'|'LAST_MODIFIED'|null $Field
 * @property 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|'IN'|'BETWEEN'|null $ComparisonOperator
 * @property list<string>|null $StringValueList
 */
class FilterCondition extends Shape
{
    /**
     * @param array{
     *     Field?: 'RESOURCE_ARN'|'ROLE_ARN'|'LAST_MODIFIED'|null,
     *     ComparisonOperator?: 'EQ'|'NE'|'LE'|'LT'|'GE'|'GT'|'CONTAINS'|'NOT_CONTAINS'|'BEGINS_WITH'|'IN'|'BETWEEN'|null,
     *     StringValueList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
