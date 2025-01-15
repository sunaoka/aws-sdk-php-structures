<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'A'|'M'|'D'|null $source
 * @property 'A'|'M'|'D'|null $destination
 */
class MergeOperations extends Shape
{
    /**
     * @param array{
     *     source?: 'A'|'M'|'D'|null,
     *     destination?: 'A'|'M'|'D'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
