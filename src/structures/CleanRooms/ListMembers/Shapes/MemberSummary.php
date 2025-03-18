<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED' $status
 * @property string $displayName
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'> $abilities
 * @property MLMemberAbilities|null $mlAbilities
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string|null $membershipId
 * @property string|null $membershipArn
 * @property PaymentConfiguration $paymentConfiguration
 */
class MemberSummary extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     status: 'INVITED'|'ACTIVE'|'LEFT'|'REMOVED',
     *     displayName: string,
     *     abilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'>,
     *     mlAbilities?: MLMemberAbilities|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     membershipId?: string|null,
     *     membershipArn?: string|null,
     *     paymentConfiguration: PaymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
