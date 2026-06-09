<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autonomousDatabaseBackupId
 * @property string|null $autonomousDatabaseBackupArn
 * @property string|null $autonomousDatabaseId
 * @property string|null $ocid
 * @property string|null $displayName
 * @property string|null $dbVersion
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $status
 * @property string|null $statusReason
 * @property bool|null $isAutomatic
 * @property int|null $retentionPeriodInDays
 * @property double|null $sizeInTBs
 * @property \Aws\Api\DateTimeResult|null $timeAvailableTill
 * @property \Aws\Api\DateTimeResult|null $timeStarted
 * @property \Aws\Api\DateTimeResult|null $timeEnded
 * @property 'INCREMENTAL'|'FULL'|'LONGTERM'|'VIRTUAL_FULL'|'CUMULATIVE_INCREMENTAL'|'ROLL_FORWARD_IMAGE_COPY'|null $type
 */
class AutonomousDatabaseBackupSummary extends Shape
{
    /**
     * @param array{
     *     autonomousDatabaseBackupId?: string|null,
     *     autonomousDatabaseBackupArn?: string|null,
     *     autonomousDatabaseId?: string|null,
     *     ocid?: string|null,
     *     displayName?: string|null,
     *     dbVersion?: string|null,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     statusReason?: string|null,
     *     isAutomatic?: bool|null,
     *     retentionPeriodInDays?: int|null,
     *     sizeInTBs?: double|null,
     *     timeAvailableTill?: \Aws\Api\DateTimeResult|null,
     *     timeStarted?: \Aws\Api\DateTimeResult|null,
     *     timeEnded?: \Aws\Api\DateTimeResult|null,
     *     type?: 'INCREMENTAL'|'FULL'|'LONGTERM'|'VIRTUAL_FULL'|'CUMULATIVE_INCREMENTAL'|'ROLL_FORWARD_IMAGE_COPY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
