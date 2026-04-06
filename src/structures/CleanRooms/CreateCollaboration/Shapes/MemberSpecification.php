<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $memberAbilities
 * @property string $displayName
 */
class MemberSpecification extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'>,
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
