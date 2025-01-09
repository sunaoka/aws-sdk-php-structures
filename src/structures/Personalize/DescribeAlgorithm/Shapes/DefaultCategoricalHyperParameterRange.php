<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $values
 * @property bool $isTunable
 */
class DefaultCategoricalHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     values?: list<string>,
     *     isTunable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
