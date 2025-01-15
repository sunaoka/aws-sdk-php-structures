<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssociationsForLicenseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null $ResourceType
 * @property string|null $ResourceOwnerId
 * @property \Aws\Api\DateTimeResult|null $AssociationTime
 * @property string|null $AmiAssociationScope
 */
class LicenseConfigurationAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null,
     *     ResourceOwnerId?: string|null,
     *     AssociationTime?: \Aws\Api\DateTimeResult|null,
     *     AmiAssociationScope?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
