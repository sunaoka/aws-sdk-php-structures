<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DeprecationDetail>|null $deprecationDetails
 * @property list<AddonCompatibilityDetail>|null $addonCompatibilityDetails
 */
class InsightCategorySpecificSummary extends Shape
{
    /**
     * @param array{
     *     deprecationDetails?: list<DeprecationDetail>|null,
     *     addonCompatibilityDetails?: list<AddonCompatibilityDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
