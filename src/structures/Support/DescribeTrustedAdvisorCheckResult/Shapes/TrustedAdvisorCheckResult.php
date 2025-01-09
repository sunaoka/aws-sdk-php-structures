<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkId
 * @property string $timestamp
 * @property string $status
 * @property TrustedAdvisorResourcesSummary $resourcesSummary
 * @property TrustedAdvisorCategorySpecificSummary $categorySpecificSummary
 * @property list<TrustedAdvisorResourceDetail> $flaggedResources
 */
class TrustedAdvisorCheckResult extends Shape
{
    /**
     * @param array{
     *     checkId: string,
     *     timestamp: string,
     *     status: string,
     *     resourcesSummary: TrustedAdvisorResourcesSummary,
     *     categorySpecificSummary: TrustedAdvisorCategorySpecificSummary,
     *     flaggedResources: list<TrustedAdvisorResourceDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
