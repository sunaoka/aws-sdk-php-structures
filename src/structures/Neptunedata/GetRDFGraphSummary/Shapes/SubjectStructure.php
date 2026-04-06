<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetRDFGraphSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property list<string>|null $predicates
 */
class SubjectStructure extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     predicates?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
