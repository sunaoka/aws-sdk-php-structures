<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BranchName
 */
class RepositoryHeadSourceCodeType extends Shape
{
    /**
     * @param array{BranchName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
