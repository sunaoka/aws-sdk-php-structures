<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceCommit
 * @property string|null $DestinationCommit
 * @property string|null $MergeBaseCommit
 */
class CommitDiffSourceCodeType extends Shape
{
    /**
     * @param array{
     *     SourceCommit?: string|null,
     *     DestinationCommit?: string|null,
     *     MergeBaseCommit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
