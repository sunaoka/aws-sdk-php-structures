<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eq
 * @property list<string>|null $neq
 * @property list<string>|null $contains
 * @property bool|null $exists
 */
class Criterion extends Shape
{
    /**
     * @param array{
     *     eq?: list<string>|null,
     *     neq?: list<string>|null,
     *     contains?: list<string>|null,
     *     exists?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
