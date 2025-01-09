<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property list<string> $predicates
 */
class SubjectStructure extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     predicates?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
