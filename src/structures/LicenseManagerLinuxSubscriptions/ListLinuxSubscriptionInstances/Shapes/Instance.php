<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountID
 * @property string|null $AmiId
 * @property string|null $DualSubscription
 * @property string|null $InstanceID
 * @property string|null $InstanceType
 * @property string|null $LastUpdatedTime
 * @property string|null $OsVersion
 * @property list<string>|null $ProductCode
 * @property string|null $Region
 * @property string|null $RegisteredWithSubscriptionProvider
 * @property string|null $Status
 * @property string|null $SubscriptionName
 * @property string|null $SubscriptionProviderCreateTime
 * @property string|null $SubscriptionProviderUpdateTime
 * @property string|null $UsageOperation
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     AccountID?: string|null,
     *     AmiId?: string|null,
     *     DualSubscription?: string|null,
     *     InstanceID?: string|null,
     *     InstanceType?: string|null,
     *     LastUpdatedTime?: string|null,
     *     OsVersion?: string|null,
     *     ProductCode?: list<string>|null,
     *     Region?: string|null,
     *     RegisteredWithSubscriptionProvider?: string|null,
     *     Status?: string|null,
     *     SubscriptionName?: string|null,
     *     SubscriptionProviderCreateTime?: string|null,
     *     SubscriptionProviderUpdateTime?: string|null,
     *     UsageOperation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
