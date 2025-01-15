<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EstimatedMonthlyCost
 * @property string|null $EstimatedMonthlySavings
 * @property string|null $CurrencyCode
 * @property bool|null $DefaultTargetInstance
 * @property ResourceDetails|null $ResourceDetails
 * @property ResourceUtilization|null $ExpectedResourceUtilization
 * @property list<'HYPERVISOR'|'NETWORK_INTERFACE'|'STORAGE_INTERFACE'|'INSTANCE_STORE_AVAILABILITY'|'VIRTUALIZATION_TYPE'>|null $PlatformDifferences
 */
class TargetInstance extends Shape
{
    /**
     * @param array{
     *     EstimatedMonthlyCost?: string|null,
     *     EstimatedMonthlySavings?: string|null,
     *     CurrencyCode?: string|null,
     *     DefaultTargetInstance?: bool|null,
     *     ResourceDetails?: ResourceDetails|null,
     *     ExpectedResourceUtilization?: ResourceUtilization|null,
     *     PlatformDifferences?: list<'HYPERVISOR'|'NETWORK_INTERFACE'|'STORAGE_INTERFACE'|'INSTANCE_STORE_AVAILABILITY'|'VIRTUALIZATION_TYPE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
