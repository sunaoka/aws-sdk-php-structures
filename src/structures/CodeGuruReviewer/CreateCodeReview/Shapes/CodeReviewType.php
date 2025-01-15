<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RepositoryAnalysis $RepositoryAnalysis
 * @property list<'Security'|'CodeQuality'>|null $AnalysisTypes
 */
class CodeReviewType extends Shape
{
    /**
     * @param array{
     *     RepositoryAnalysis: RepositoryAnalysis,
     *     AnalysisTypes?: list<'Security'|'CodeQuality'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
