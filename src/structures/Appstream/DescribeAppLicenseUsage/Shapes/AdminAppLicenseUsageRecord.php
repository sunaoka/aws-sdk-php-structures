<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppLicenseUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserArn
 * @property string $BillingPeriod
 * @property string $OwnerAWSAccountId
 * @property \Aws\Api\DateTimeResult $SubscriptionFirstUsedDate
 * @property \Aws\Api\DateTimeResult $SubscriptionLastUsedDate
 * @property string $LicenseType
 * @property string $UserId
 */
class AdminAppLicenseUsageRecord extends Shape
{
    /**
     * @param array{
     *     UserArn: string,
     *     BillingPeriod: string,
     *     OwnerAWSAccountId: string,
     *     SubscriptionFirstUsedDate: \Aws\Api\DateTimeResult,
     *     SubscriptionLastUsedDate: \Aws\Api\DateTimeResult,
     *     LicenseType: string,
     *     UserId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
