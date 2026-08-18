<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssessmentArn
 * @property string|null $AssessmentId
 * @property string|null $FrameworkId
 * @property AssessmentTargetSummary|null $AssessmentTargetSummary
 * @property FrameworkSummary|null $FrameworkSummary
 * @property 'PASS'|'FAIL'|null $AssessmentResult
 * @property string|null $CreatedAt
 * @property string|null $ExpiresAt
 */
class AssessmentSummary extends Shape
{
    /**
     * @param array{
     *     AssessmentArn?: string|null,
     *     AssessmentId?: string|null,
     *     FrameworkId?: string|null,
     *     AssessmentTargetSummary?: AssessmentTargetSummary|null,
     *     FrameworkSummary?: FrameworkSummary|null,
     *     AssessmentResult?: 'PASS'|'FAIL'|null,
     *     CreatedAt?: string|null,
     *     ExpiresAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
