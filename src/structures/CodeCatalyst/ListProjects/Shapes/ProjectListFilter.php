<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'hasAccessTo'|'name' $key
 * @property list<string> $values
 * @property 'EQ'|'GT'|'GE'|'LT'|'LE'|'BEGINS_WITH'|null $comparisonOperator
 */
class ProjectListFilter extends Shape
{
    /**
     * @param array{
     *     key: 'hasAccessTo'|'name',
     *     values: list<string>,
     *     comparisonOperator?: 'EQ'|'GT'|'GE'|'LT'|'LE'|'BEGINS_WITH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
