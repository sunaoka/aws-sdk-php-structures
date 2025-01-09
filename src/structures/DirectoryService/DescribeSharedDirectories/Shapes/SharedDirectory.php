<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSharedDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerAccountId
 * @property string $OwnerDirectoryId
 * @property 'ORGANIZATIONS'|'HANDSHAKE' $ShareMethod
 * @property string $SharedAccountId
 * @property string $SharedDirectoryId
 * @property 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting' $ShareStatus
 * @property string $ShareNotes
 * @property \Aws\Api\DateTimeResult $CreatedDateTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 */
class SharedDirectory extends Shape
{
    /**
     * @param array{
     *     OwnerAccountId?: string,
     *     OwnerDirectoryId?: string,
     *     ShareMethod?: 'ORGANIZATIONS'|'HANDSHAKE',
     *     SharedAccountId?: string,
     *     SharedDirectoryId?: string,
     *     ShareStatus?: 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting',
     *     ShareNotes?: string,
     *     CreatedDateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
