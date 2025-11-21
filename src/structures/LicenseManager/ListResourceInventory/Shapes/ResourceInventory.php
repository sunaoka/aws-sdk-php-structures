<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null $ResourceType
 * @property string|null $ResourceArn
 * @property string|null $Platform
 * @property string|null $PlatformVersion
 * @property string|null $ResourceOwningAccountId
 * @property list<string>|null $MarketplaceProductCodes
 * @property string|null $UsageOperation
 * @property string|null $AmiId
 * @property string|null $HostId
 * @property string|null $Region
 * @property string|null $InstanceType
 */
class ResourceInventory extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null,
     *     ResourceArn?: string|null,
     *     Platform?: string|null,
     *     PlatformVersion?: string|null,
     *     ResourceOwningAccountId?: string|null,
     *     MarketplaceProductCodes?: list<string>|null,
     *     UsageOperation?: string|null,
     *     AmiId?: string|null,
     *     HostId?: string|null,
     *     Region?: string|null,
     *     InstanceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
