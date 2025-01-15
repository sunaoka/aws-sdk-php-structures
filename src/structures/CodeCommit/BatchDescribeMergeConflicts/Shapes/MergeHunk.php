<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isConflict
 * @property MergeHunkDetail|null $source
 * @property MergeHunkDetail|null $destination
 * @property MergeHunkDetail|null $base
 */
class MergeHunk extends Shape
{
    /**
     * @param array{
     *     isConflict?: bool|null,
     *     source?: MergeHunkDetail|null,
     *     destination?: MergeHunkDetail|null,
     *     base?: MergeHunkDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
