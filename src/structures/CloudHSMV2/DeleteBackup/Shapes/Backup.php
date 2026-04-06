<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupId
 * @property 'CREATE_IN_PROGRESS'|'READY'|'DELETED'|'PENDING_DELETION'|null $BackupState
 * @property string|null $ClusterId
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $CopyTimestamp
 * @property bool|null $NeverExpires
 * @property string|null $SourceRegion
 * @property string|null $SourceBackup
 * @property string|null $SourceCluster
 * @property \Aws\Api\DateTimeResult|null $DeleteTimestamp
 * @property list<Tag>|null $TagList
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupId: string,
     *     BackupState?: 'CREATE_IN_PROGRESS'|'READY'|'DELETED'|'PENDING_DELETION'|null,
     *     ClusterId?: string|null,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CopyTimestamp?: \Aws\Api\DateTimeResult|null,
     *     NeverExpires?: bool|null,
     *     SourceRegion?: string|null,
     *     SourceBackup?: string|null,
     *     SourceCluster?: string|null,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
