<?php

namespace Sunaoka\Aws\Structures\RAM\ListReplacePermissionAssociationsWork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $fromPermissionArn
 * @property string|null $fromPermissionVersion
 * @property string|null $toPermissionArn
 * @property string|null $toPermissionVersion
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 */
class ReplacePermissionAssociationsWork extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     fromPermissionArn?: string|null,
     *     fromPermissionVersion?: string|null,
     *     toPermissionArn?: string|null,
     *     toPermissionVersion?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     statusMessage?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
