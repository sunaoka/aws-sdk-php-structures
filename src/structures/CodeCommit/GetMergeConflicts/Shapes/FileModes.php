<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $source
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $destination
 * @property 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null $base
 */
class FileModes extends Shape
{
    /**
     * @param array{
     *     source?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null,
     *     destination?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null,
     *     base?: 'EXECUTABLE'|'NORMAL'|'SYMLINK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
