<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property list<string>|null $values
 * @property bool|null $isTunable
 */
class DefaultCategoricalHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     values?: list<string>|null,
     *     isTunable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
