<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $collaborationId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'PENDING'|'APPROVED'|'CANCELLED'|'DENIED'|'COMMITTED' $status
 * @property bool $isAutoApproved
 * @property list<Change> $changes
 * @property array<string, ApprovalStatusDetails>|null $approvals
 */
class CollaborationChangeRequest extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     collaborationId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     status: 'PENDING'|'APPROVED'|'CANCELLED'|'DENIED'|'COMMITTED',
     *     isAutoApproved: bool,
     *     changes: list<Change>,
     *     approvals?: array<string, ApprovalStatusDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
