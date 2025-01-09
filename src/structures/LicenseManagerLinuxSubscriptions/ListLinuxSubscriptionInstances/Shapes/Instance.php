<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountID
 * @property string $AmiId
 * @property string $DualSubscription
 * @property string $InstanceID
 * @property string $InstanceType
 * @property string $LastUpdatedTime
 * @property string $OsVersion
 * @property list<string> $ProductCode
 * @property string $Region
 * @property string $RegisteredWithSubscriptionProvider
 * @property string $Status
 * @property string $SubscriptionName
 * @property string $SubscriptionProviderCreateTime
 * @property string $SubscriptionProviderUpdateTime
 * @property string $UsageOperation
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     AccountID?: string,
     *     AmiId?: string,
     *     DualSubscription?: string,
     *     InstanceID?: string,
     *     InstanceType?: string,
     *     LastUpdatedTime?: string,
     *     OsVersion?: string,
     *     ProductCode?: list<string>,
     *     Region?: string,
     *     RegisteredWithSubscriptionProvider?: string,
     *     Status?: string,
     *     SubscriptionName?: string,
     *     SubscriptionProviderCreateTime?: string,
     *     SubscriptionProviderUpdateTime?: string,
     *     UsageOperation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
