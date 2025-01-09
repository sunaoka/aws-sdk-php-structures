<?php

namespace Sunaoka\Aws\Structures\RAM\ListReplacePermissionAssociationsWork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $fromPermissionArn
 * @property string $fromPermissionVersion
 * @property string $toPermissionArn
 * @property string $toPermissionVersion
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class ReplacePermissionAssociationsWork extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     fromPermissionArn?: string,
     *     fromPermissionVersion?: string,
     *     toPermissionArn?: string,
     *     toPermissionVersion?: string,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     statusMessage?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
