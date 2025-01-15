<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSourceId
 * @property string|null $DataLocationS3
 * @property string|null $DataRearrangement
 * @property string|null $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property int|null $DataSizeInBytes
 * @property int|null $NumberOfFiles
 * @property string|null $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null $Status
 * @property string|null $Message
 * @property RedshiftMetadata|null $RedshiftMetadata
 * @property RDSMetadata|null $RDSMetadata
 * @property string|null $RoleARN
 * @property bool|null $ComputeStatistics
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     DataSourceId?: string|null,
     *     DataLocationS3?: string|null,
     *     DataRearrangement?: string|null,
     *     CreatedByIamUser?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     DataSizeInBytes?: int|null,
     *     NumberOfFiles?: int|null,
     *     Name?: string|null,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED'|null,
     *     Message?: string|null,
     *     RedshiftMetadata?: RedshiftMetadata|null,
     *     RDSMetadata?: RDSMetadata|null,
     *     RoleARN?: string|null,
     *     ComputeStatistics?: bool|null,
     *     ComputeTime?: int|null,
     *     FinishedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
