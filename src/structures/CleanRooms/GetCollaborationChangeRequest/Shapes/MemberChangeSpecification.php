<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'> $memberAbilities
 * @property string|null $displayName
 */
class MemberChangeSpecification extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     memberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'>,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
