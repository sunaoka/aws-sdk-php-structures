<?php

namespace Sunaoka\Aws\Structures\Billing\ListEnterpriseSupportLinkedAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceCode
 * @property string|null $totalSupportEligibleSpend
 */
class ServiceLevelAccountUsage extends Shape
{
    /**
     * @param array{
     *     serviceCode?: string|null,
     *     totalSupportEligibleSpend?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
