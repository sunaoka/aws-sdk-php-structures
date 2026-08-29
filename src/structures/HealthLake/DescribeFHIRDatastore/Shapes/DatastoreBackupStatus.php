<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackupConfiguration|null $Configuration
 * @property \Aws\Api\DateTimeResult|null $BackupEnabledAt
 * @property \Aws\Api\DateTimeResult|null $EarliestRestorePoint
 * @property \Aws\Api\DateTimeResult|null $LatestRestorePoint
 * @property \Aws\Api\DateTimeResult|null $ScheduledPermanentDeletionTime
 */
class DatastoreBackupStatus extends Shape
{
    /**
     * @param array{
     *     Configuration?: BackupConfiguration|null,
     *     BackupEnabledAt?: \Aws\Api\DateTimeResult|null,
     *     EarliestRestorePoint?: \Aws\Api\DateTimeResult|null,
     *     LatestRestorePoint?: \Aws\Api\DateTimeResult|null,
     *     ScheduledPermanentDeletionTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
