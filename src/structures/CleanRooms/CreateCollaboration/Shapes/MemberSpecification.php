<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $memberAbilities
 * @property MLMemberAbilities $mlMemberAbilities
 * @property string $displayName
 * @property PaymentConfiguration $paymentConfiguration
 */
class MemberSpecification extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'>,
     *     mlMemberAbilities?: MLMemberAbilities,
     *     displayName: string,
     *     paymentConfiguration?: PaymentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
