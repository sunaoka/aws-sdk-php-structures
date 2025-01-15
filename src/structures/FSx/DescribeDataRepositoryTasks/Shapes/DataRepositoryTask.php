<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskId
 * @property 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING' $Lifecycle
 * @property 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA' $Type
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property string|null $FileSystemId
 * @property list<string>|null $Paths
 * @property DataRepositoryTaskFailureDetails|null $FailureDetails
 * @property DataRepositoryTaskStatus|null $Status
 * @property CompletionReport|null $Report
 * @property int<1, 2147483647>|null $CapacityToRelease
 * @property string|null $FileCacheId
 * @property ReleaseConfiguration|null $ReleaseConfiguration
 */
class DataRepositoryTask extends Shape
{
    /**
     * @param array{
     *     TaskId: string,
     *     Lifecycle: 'PENDING'|'EXECUTING'|'FAILED'|'SUCCEEDED'|'CANCELED'|'CANCELING',
     *     Type: 'EXPORT_TO_REPOSITORY'|'IMPORT_METADATA_FROM_REPOSITORY'|'RELEASE_DATA_FROM_FILESYSTEM'|'AUTO_RELEASE_DATA',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     FileSystemId?: string|null,
     *     Paths?: list<string>|null,
     *     FailureDetails?: DataRepositoryTaskFailureDetails|null,
     *     Status?: DataRepositoryTaskStatus|null,
     *     Report?: CompletionReport|null,
     *     CapacityToRelease?: int<1, 2147483647>|null,
     *     FileCacheId?: string|null,
     *     ReleaseConfiguration?: ReleaseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
