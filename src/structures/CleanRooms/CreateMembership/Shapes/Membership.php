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
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $memberAbilities
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
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
     *     queryLogStatus: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
