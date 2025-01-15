<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AcceptSharedDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerAccountId
 * @property string|null $OwnerDirectoryId
 * @property 'ORGANIZATIONS'|'HANDSHAKE'|null $ShareMethod
 * @property string|null $SharedAccountId
 * @property string|null $SharedDirectoryId
 * @property 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting'|null $ShareStatus
 * @property string|null $ShareNotes
 * @property \Aws\Api\DateTimeResult|null $CreatedDateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 */
class SharedDirectory extends Shape
{
    /**
     * @param array{
     *     OwnerAccountId?: string|null,
     *     OwnerDirectoryId?: string|null,
     *     ShareMethod?: 'ORGANIZATIONS'|'HANDSHAKE'|null,
     *     SharedAccountId?: string|null,
     *     SharedDirectoryId?: string|null,
     *     ShareStatus?: 'Shared'|'PendingAcceptance'|'Rejected'|'Rejecting'|'RejectFailed'|'Sharing'|'ShareFailed'|'Deleted'|'Deleting'|null,
     *     ShareNotes?: string|null,
     *     CreatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
