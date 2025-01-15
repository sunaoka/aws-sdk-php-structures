<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListLicenseConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null $ResourceType
 * @property int|null $AssociationCount
 */
class ManagedResourceSummary extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null,
     *     AssociationCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
