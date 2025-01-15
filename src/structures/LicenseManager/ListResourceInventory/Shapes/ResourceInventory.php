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
     *     ResourceOwningAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
