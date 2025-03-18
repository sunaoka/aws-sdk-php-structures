<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'> $memberAbilities
 * @property MLMemberAbilities|null $mlMemberAbilities
 * @property string $displayName
 * @property PaymentConfiguration|null $paymentConfiguration
 */
class MemberSpecification extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'>,
     *     mlMemberAbilities?: MLMemberAbilities|null,
     *     displayName: string,
     *     paymentConfiguration?: PaymentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
