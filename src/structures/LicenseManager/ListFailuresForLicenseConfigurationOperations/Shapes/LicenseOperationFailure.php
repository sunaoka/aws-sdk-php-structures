<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListFailuresForLicenseConfigurationOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null $ResourceType
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $FailureTime
 * @property string|null $OperationName
 * @property string|null $ResourceOwnerId
 * @property string|null $OperationRequestedBy
 * @property list<Metadata>|null $MetadataList
 */
class LicenseOperationFailure extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE'|null,
     *     ErrorMessage?: string|null,
     *     FailureTime?: \Aws\Api\DateTimeResult|null,
     *     OperationName?: string|null,
     *     ResourceOwnerId?: string|null,
     *     OperationRequestedBy?: string|null,
     *     MetadataList?: list<Metadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
