<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $source
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $destination
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK' $base
 */
class FileModes extends Shape
{
    /**
     * @param array{
     *     source?: 'EXECUTABLE'|'NORMAL'|'SYMLINK',
     *     destination?: 'EXECUTABLE'|'NORMAL'|'SYMLINK',
     *     base?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
