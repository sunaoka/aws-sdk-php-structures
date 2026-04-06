<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'hasAccessTo' $key
 * @property list<string> $values
 * @property 'EQ'|'GT'|'GE'|'LT'|'LE'|null $comparisonOperator
 */
class ProjectListFilter extends Shape
{
    /**
     * @param array{
     *     key: 'hasAccessTo',
     *     values: list<string>,
     *     comparisonOperator?: 'EQ'|'GT'|'GE'|'LT'|'LE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
