<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EstimatedMonthlyCost
 * @property string $EstimatedMonthlySavings
 * @property string $CurrencyCode
 * @property bool $DefaultTargetInstance
 * @property ResourceDetails $ResourceDetails
 * @property ResourceUtilization $ExpectedResourceUtilization
 * @property list<'HYPERVISOR'|'NETWORK_INTERFACE'|'STORAGE_INTERFACE'|'INSTANCE_STORE_AVAILABILITY'|'VIRTUALIZATION_TYPE'> $PlatformDifferences
 */
class TargetInstance extends Shape
{
    /**
     * @param array{
     *     EstimatedMonthlyCost?: string,
     *     EstimatedMonthlySavings?: string,
     *     CurrencyCode?: string,
     *     DefaultTargetInstance?: bool,
     *     ResourceDetails?: ResourceDetails,
     *     ExpectedResourceUtilization?: ResourceUtilization,
     *     PlatformDifferences?: list<'HYPERVISOR'|'NETWORK_INTERFACE'|'STORAGE_INTERFACE'|'INSTANCE_STORE_AVAILABILITY'|'VIRTUALIZATION_TYPE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
