<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceBranchName
 * @property string $DestinationBranchName
 */
class BranchDiffSourceCodeType extends Shape
{
    /**
     * @param array{
     *     SourceBranchName: string,
     *     DestinationBranchName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
