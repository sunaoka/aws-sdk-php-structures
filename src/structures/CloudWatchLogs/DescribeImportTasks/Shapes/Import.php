<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $importId
 * @property string|null $importSourceArn
 * @property 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null $importStatus
 * @property string|null $importDestinationArn
 * @property ImportStatistics|null $importStatistics
 * @property ImportFilter|null $importFilter
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $lastUpdatedTime
 * @property string|null $errorMessage
 */
class Import extends Shape
{
    /**
     * @param array{
     *     importId?: string|null,
     *     importSourceArn?: string|null,
     *     importStatus?: 'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|null,
     *     importDestinationArn?: string|null,
     *     importStatistics?: ImportStatistics|null,
     *     importFilter?: ImportFilter|null,
     *     creationTime?: int<0, max>|null,
     *     lastUpdatedTime?: int<0, max>|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
