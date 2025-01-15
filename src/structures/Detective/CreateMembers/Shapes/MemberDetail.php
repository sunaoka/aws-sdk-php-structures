<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $EmailAddress
 * @property string|null $GraphArn
 * @property string|null $MasterId
 * @property string|null $AdministratorId
 * @property 'INVITED'|'VERIFICATION_IN_PROGRESS'|'VERIFICATION_FAILED'|'ENABLED'|'ACCEPTED_BUT_DISABLED'|null $Status
 * @property 'VOLUME_TOO_HIGH'|'VOLUME_UNKNOWN'|null $DisabledReason
 * @property \Aws\Api\DateTimeResult|null $InvitedTime
 * @property \Aws\Api\DateTimeResult|null $UpdatedTime
 * @property int|null $VolumeUsageInBytes
 * @property \Aws\Api\DateTimeResult|null $VolumeUsageUpdatedTime
 * @property double|null $PercentOfGraphUtilization
 * @property \Aws\Api\DateTimeResult|null $PercentOfGraphUtilizationUpdatedTime
 * @property 'INVITATION'|'ORGANIZATION'|null $InvitationType
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', DatasourcePackageUsageInfo>|null $VolumeUsageByDatasourcePackage
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', 'STARTED'|'STOPPED'|'DISABLED'>|null $DatasourcePackageIngestStates
 */
class MemberDetail extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     EmailAddress?: string|null,
     *     GraphArn?: string|null,
     *     MasterId?: string|null,
     *     AdministratorId?: string|null,
     *     Status?: 'INVITED'|'VERIFICATION_IN_PROGRESS'|'VERIFICATION_FAILED'|'ENABLED'|'ACCEPTED_BUT_DISABLED'|null,
     *     DisabledReason?: 'VOLUME_TOO_HIGH'|'VOLUME_UNKNOWN'|null,
     *     InvitedTime?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     VolumeUsageInBytes?: int|null,
     *     VolumeUsageUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     PercentOfGraphUtilization?: double|null,
     *     PercentOfGraphUtilizationUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     InvitationType?: 'INVITATION'|'ORGANIZATION'|null,
     *     VolumeUsageByDatasourcePackage?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', DatasourcePackageUsageInfo>|null,
     *     DatasourcePackageIngestStates?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', 'STARTED'|'STOPPED'|'DISABLED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
