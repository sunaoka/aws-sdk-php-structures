<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $source
 * @property int|null $destination
 * @property int|null $base
 */
class FileSizes extends Shape
{
    /**
     * @param array{
     *     source?: int|null,
     *     destination?: int|null,
     *     base?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
