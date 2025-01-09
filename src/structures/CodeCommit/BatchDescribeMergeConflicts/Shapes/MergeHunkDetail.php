<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $startLine
 * @property int $endLine
 * @property string $hunkContent
 */
class MergeHunkDetail extends Shape
{
    /**
     * @param array{
     *     startLine?: int,
     *     endLine?: int,
     *     hunkContent?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
