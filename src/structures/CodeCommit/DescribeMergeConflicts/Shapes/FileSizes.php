<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $source
 * @property int $destination
 * @property int $base
 */
class FileSizes extends Shape
{
    /**
     * @param array{
     *     source?: int,
     *     destination?: int,
     *     base?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
