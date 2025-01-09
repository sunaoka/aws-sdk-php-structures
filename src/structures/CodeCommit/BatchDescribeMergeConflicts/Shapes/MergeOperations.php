<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'A'|'M'|'D' $source
 * @property 'A'|'M'|'D' $destination
 */
class MergeOperations extends Shape
{
    /**
     * @param array{
     *     source?: 'A'|'M'|'D',
     *     destination?: 'A'|'M'|'D'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
