<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribeMergeConflicts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $startLine
 * @property int|null $endLine
 * @property string|null $hunkContent
 */
class MergeHunkDetail extends Shape
{
    /**
     * @param array{
     *     startLine?: int|null,
     *     endLine?: int|null,
     *     hunkContent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
