<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property array<string, Criterion> $filter
 */
class InlineArchiveRule extends Shape
{
    /**
     * @param array{
     *     ruleName: string,
     *     filter: array<string, Criterion>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
