<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListResourceInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE' $ResourceType
 * @property string $ResourceArn
 * @property string $Platform
 * @property string $PlatformVersion
 * @property string $ResourceOwningAccountId
 */
class ResourceInventory extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE',
     *     ResourceArn?: string,
     *     Platform?: string,
     *     PlatformVersion?: string,
     *     ResourceOwningAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
