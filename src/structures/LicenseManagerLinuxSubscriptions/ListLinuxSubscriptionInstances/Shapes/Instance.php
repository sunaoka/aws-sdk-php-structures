<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListLinuxSubscriptionInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountID
 * @property string|null $AmiId
 * @property string|null $InstanceID
 * @property string|null $InstanceType
 * @property string|null $LastUpdatedTime
 * @property list<string>|null $ProductCode
 * @property string|null $Region
 * @property string|null $Status
 * @property string|null $SubscriptionName
 * @property string|null $UsageOperation
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     AccountID?: string|null,
     *     AmiId?: string|null,
     *     InstanceID?: string|null,
     *     InstanceType?: string|null,
     *     LastUpdatedTime?: string|null,
     *     ProductCode?: list<string>|null,
     *     Region?: string|null,
     *     Status?: string|null,
     *     SubscriptionName?: string|null,
     *     UsageOperation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
