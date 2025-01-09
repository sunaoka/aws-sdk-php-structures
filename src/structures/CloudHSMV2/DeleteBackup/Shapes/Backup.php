<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupId
 * @property string $BackupArn
 * @property 'CREATE_IN_PROGRESS'|'READY'|'DELETED'|'PENDING_DELETION' $BackupState
 * @property string $ClusterId
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult $CopyTimestamp
 * @property bool $NeverExpires
 * @property string $SourceRegion
 * @property string $SourceBackup
 * @property string $SourceCluster
 * @property \Aws\Api\DateTimeResult $DeleteTimestamp
 * @property list<Tag> $TagList
 * @property string $HsmType
 * @property 'FIPS'|'NON_FIPS' $Mode
 */
class Backup extends Shape
{
    /**
     * @param array{
     *     BackupId: string,
     *     BackupArn?: string,
     *     BackupState?: 'CREATE_IN_PROGRESS'|'READY'|'DELETED'|'PENDING_DELETION',
     *     ClusterId?: string,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     CopyTimestamp?: \Aws\Api\DateTimeResult,
     *     NeverExpires?: bool,
     *     SourceRegion?: string,
     *     SourceBackup?: string,
     *     SourceCluster?: string,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult,
     *     TagList?: list<Tag>,
     *     HsmType?: string,
     *     Mode?: 'FIPS'|'NON_FIPS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
