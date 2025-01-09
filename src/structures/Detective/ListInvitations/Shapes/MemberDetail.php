<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $EmailAddress
 * @property string $GraphArn
 * @property string $MasterId
 * @property string $AdministratorId
 * @property 'INVITED'|'VERIFICATION_IN_PROGRESS'|'VERIFICATION_FAILED'|'ENABLED'|'ACCEPTED_BUT_DISABLED' $Status
 * @property 'VOLUME_TOO_HIGH'|'VOLUME_UNKNOWN' $DisabledReason
 * @property \Aws\Api\DateTimeResult $InvitedTime
 * @property \Aws\Api\DateTimeResult $UpdatedTime
 * @property int $VolumeUsageInBytes
 * @property \Aws\Api\DateTimeResult $VolumeUsageUpdatedTime
 * @property double $PercentOfGraphUtilization
 * @property \Aws\Api\DateTimeResult $PercentOfGraphUtilizationUpdatedTime
 * @property 'INVITATION'|'ORGANIZATION' $InvitationType
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', DatasourcePackageUsageInfo> $VolumeUsageByDatasourcePackage
 * @property array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', 'STARTED'|'STOPPED'|'DISABLED'> $DatasourcePackageIngestStates
 */
class MemberDetail extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     EmailAddress?: string,
     *     GraphArn?: string,
     *     MasterId?: string,
     *     AdministratorId?: string,
     *     Status?: 'INVITED'|'VERIFICATION_IN_PROGRESS'|'VERIFICATION_FAILED'|'ENABLED'|'ACCEPTED_BUT_DISABLED',
     *     DisabledReason?: 'VOLUME_TOO_HIGH'|'VOLUME_UNKNOWN',
     *     InvitedTime?: \Aws\Api\DateTimeResult,
     *     UpdatedTime?: \Aws\Api\DateTimeResult,
     *     VolumeUsageInBytes?: int,
     *     VolumeUsageUpdatedTime?: \Aws\Api\DateTimeResult,
     *     PercentOfGraphUtilization?: double,
     *     PercentOfGraphUtilizationUpdatedTime?: \Aws\Api\DateTimeResult,
     *     InvitationType?: 'INVITATION'|'ORGANIZATION',
     *     VolumeUsageByDatasourcePackage?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', DatasourcePackageUsageInfo>,
     *     DatasourcePackageIngestStates?: array<'DETECTIVE_CORE'|'EKS_AUDIT'|'ASFF_SECURITYHUB_FINDING', 'STARTED'|'STOPPED'|'DISABLED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
