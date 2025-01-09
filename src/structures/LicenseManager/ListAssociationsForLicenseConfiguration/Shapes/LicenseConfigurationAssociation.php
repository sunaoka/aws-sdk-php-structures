<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListAssociationsForLicenseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE' $ResourceType
 * @property string $ResourceOwnerId
 * @property \Aws\Api\DateTimeResult $AssociationTime
 * @property string $AmiAssociationScope
 */
class LicenseConfigurationAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE',
     *     ResourceOwnerId?: string,
     *     AssociationTime?: \Aws\Api\DateTimeResult,
     *     AmiAssociationScope?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
