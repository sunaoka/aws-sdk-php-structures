<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListFailuresForLicenseConfigurationOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE' $ResourceType
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $FailureTime
 * @property string $OperationName
 * @property string $ResourceOwnerId
 * @property string $OperationRequestedBy
 * @property list<Metadata> $MetadataList
 */
class LicenseOperationFailure extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     ResourceType?: 'EC2_INSTANCE'|'EC2_HOST'|'EC2_AMI'|'RDS'|'SYSTEMS_MANAGER_MANAGED_INSTANCE',
     *     ErrorMessage?: string,
     *     FailureTime?: \Aws\Api\DateTimeResult,
     *     OperationName?: string,
     *     ResourceOwnerId?: string,
     *     OperationRequestedBy?: string,
     *     MetadataList?: list<Metadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
