<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RepositoryHeadSourceCodeType|null $RepositoryHead
 * @property SourceCodeType|null $SourceCodeType
 */
class RepositoryAnalysis extends Shape
{
    /**
     * @param array{
     *     RepositoryHead?: RepositoryHeadSourceCodeType|null,
     *     SourceCodeType?: SourceCodeType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
