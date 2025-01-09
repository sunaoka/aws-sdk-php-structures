<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isConflict
 * @property MergeHunkDetail $source
 * @property MergeHunkDetail $destination
 * @property MergeHunkDetail $base
 */
class MergeHunk extends Shape
{
    /**
     * @param array{
     *     isConflict?: bool,
     *     source?: MergeHunkDetail,
     *     destination?: MergeHunkDetail,
     *     base?: MergeHunkDetail
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
