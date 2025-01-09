<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkId
 * @property string $timestamp
 * @property string $status
 * @property bool $hasFlaggedResources
 * @property TrustedAdvisorResourcesSummary $resourcesSummary
 * @property TrustedAdvisorCategorySpecificSummary $categorySpecificSummary
 */
class TrustedAdvisorCheckSummary extends Shape
{
    /**
     * @param array{
     *     checkId: string,
     *     timestamp: string,
     *     status: string,
     *     hasFlaggedResources?: bool,
     *     resourcesSummary: TrustedAdvisorResourcesSummary,
     *     categorySpecificSummary: TrustedAdvisorCategorySpecificSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
