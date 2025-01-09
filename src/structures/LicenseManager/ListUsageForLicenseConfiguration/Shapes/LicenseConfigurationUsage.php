<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListUsageForLicenseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE' $ResourceType
 * @property string $ResourceStatus
 * @property string $ResourceOwnerId
 * @property \Aws\Api\DateTimeResult $AssociationTime
 * @property int $ConsumedLicenses
 */
class LicenseConfigurationUsage extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE',
     *     ResourceStatus?: string,
     *     ResourceOwnerId?: string,
     *     AssociationTime?: \Aws\Api\DateTimeResult,
     *     ConsumedLicenses?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
