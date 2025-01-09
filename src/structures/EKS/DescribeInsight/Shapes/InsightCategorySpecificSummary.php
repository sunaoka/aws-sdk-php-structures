<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeprecationDetail> $deprecationDetails
 * @property list<AddonCompatibilityDetail> $addonCompatibilityDetails
 */
class InsightCategorySpecificSummary extends Shape
{
    /**
     * @param array{
     *     deprecationDetails?: list<DeprecationDetail>,
     *     addonCompatibilityDetails?: list<AddonCompatibilityDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
