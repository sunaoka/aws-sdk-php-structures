<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListArchiveRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eq
 * @property list<string> $neq
 * @property list<string> $contains
 * @property bool $exists
 */
class Criterion extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>,
     *     neq?: list<string>,
     *     contains?: list<string>,
     *     exists?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
