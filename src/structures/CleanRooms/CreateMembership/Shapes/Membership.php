<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property string $collaborationCreatorAccountId
 * @property string $collaborationCreatorDisplayName
 * @property string $collaborationName
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'ACTIVE'|'REMOVED'|'COLLABORATION_DELETED' $status
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'> $memberAbilities
 * @property MLMemberAbilities|null $mlMemberAbilities
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property 'ENABLED'|'DISABLED'|null $jobLogStatus
 * @property MembershipProtectedQueryResultConfiguration|null $defaultResultConfiguration
 * @property MembershipProtectedJobResultConfiguration|null $defaultJobResultConfiguration
 * @property MembershipPaymentConfiguration $paymentConfiguration
 * @property bool|null $isMetricsEnabled
 */
class Membership extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     collaborationCreatorAccountId: string,
     *     collaborationCreatorDisplayName: string,
     *     collaborationName: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     status: 'ACTIVE'|'REMOVED'|'COLLABORATION_DELETED',
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'>,
     *     mlMemberAbilities?: MLMemberAbilities|null,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     jobLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     defaultResultConfiguration?: MembershipProtectedQueryResultConfiguration|null,
     *     defaultJobResultConfiguration?: MembershipProtectedJobResultConfiguration|null,
     *     paymentConfiguration: MembershipPaymentConfiguration,
     *     isMetricsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
