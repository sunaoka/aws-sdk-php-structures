<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceCommit
 * @property string $DestinationCommit
 * @property string $MergeBaseCommit
 */
class CommitDiffSourceCodeType extends Shape
{
    /**
     * @param array{
     *     SourceCommit?: string,
     *     DestinationCommit?: string,
     *     MergeBaseCommit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
