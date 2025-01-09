<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RepositoryHeadSourceCodeType $RepositoryHead
 * @property SourceCodeType $SourceCodeType
 */
class RepositoryAnalysis extends Shape
{
    /**
     * @param array{
     *     RepositoryHead?: RepositoryHeadSourceCodeType,
     *     SourceCodeType?: SourceCodeType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
