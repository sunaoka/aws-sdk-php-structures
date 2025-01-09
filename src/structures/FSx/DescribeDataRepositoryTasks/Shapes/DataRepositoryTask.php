<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING' $Lifecycle
 * @property 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA' $Type
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property string $FileSystemId
 * @property list<string> $Paths
 * @property DataRepositoryTaskFailureDetails $FailureDetails
 * @property DataRepositoryTaskStatus $Status
 * @property CompletionReport $Report
 * @property int<1, 2147483647> $CapacityToRelease
 * @property string $FileCacheId
 * @property ReleaseConfiguration $ReleaseConfiguration
 */
class DataRepositoryTask extends Shape
{
    /**
     * @param array{
     *     TaskId: string,
     *     Lifecycle: 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING',
     *     Type: 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     FileSystemId?: string,
     *     Paths?: list<string>,
     *     FailureDetails?: DataRepositoryTaskFailureDetails,
     *     Status?: DataRepositoryTaskStatus,
     *     Report?: CompletionReport,
     *     CapacityToRelease?: int<1, 2147483647>,
     *     FileCacheId?: string,
     *     ReleaseConfiguration?: ReleaseConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
