<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $source
 * @property bool $destination
 * @property bool $base
 */
class IsBinaryFile extends Shape
{
    /**
     * @param array{
     *     source?: bool,
     *     destination?: bool,
     *     base?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
