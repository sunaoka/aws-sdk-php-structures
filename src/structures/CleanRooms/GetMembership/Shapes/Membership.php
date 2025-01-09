<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership\Shapes;

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
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $memberAbilities
 * @property MLMemberAbilities $mlMemberAbilities
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property MembershipProtectedQueryResultConfiguration $defaultResultConfiguration
 * @property MembershipPaymentConfiguration $paymentConfiguration
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
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'>,
     *     mlMemberAbilities?: MLMemberAbilities,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     defaultResultConfiguration?: MembershipProtectedQueryResultConfiguration,
     *     paymentConfiguration: MembershipPaymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
