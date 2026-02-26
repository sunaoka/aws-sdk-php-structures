<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string|null $CustomerIdentifier
 * @property string $Dimension
 * @property int<0, 2147483647>|null $Quantity
 * @property list<UsageAllocation>|null $UsageAllocations
 * @property string|null $CustomerAWSAccountId
 * @property string|null $LicenseArn
 */
class UsageRecord extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     CustomerIdentifier?: string|null,
     *     Dimension: string,
     *     Quantity?: int<0, 2147483647>|null,
     *     UsageAllocations?: list<UsageAllocation>|null,
     *     CustomerAWSAccountId?: string|null,
     *     LicenseArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
