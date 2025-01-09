<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property list<string> $values
 * @property string $comparisonOperator
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     values: list<string>,
     *     comparisonOperator?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
