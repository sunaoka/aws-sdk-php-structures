<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceId
 * @property string $DataLocationS3
 * @property string $DataRearrangement
 * @property string $CreatedByIamUser
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property int $DataSizeInBytes
 * @property int $NumberOfFiles
 * @property string $Name
 * @property 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED' $Status
 * @property string $Message
 * @property RedshiftMetadata $RedshiftMetadata
 * @property RDSMetadata $RDSMetadata
 * @property string $RoleARN
 * @property bool $ComputeStatistics
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     DataSourceId?: string,
     *     DataLocationS3?: string,
     *     DataRearrangement?: string,
     *     CreatedByIamUser?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     DataSizeInBytes?: int,
     *     NumberOfFiles?: int,
     *     Name?: string,
     *     Status?: 'PENDING'|'INPROGRESS'|'FAILED'|'COMPLETED'|'DELETED',
     *     Message?: string,
     *     RedshiftMetadata?: RedshiftMetadata,
     *     RDSMetadata?: RDSMetadata,
     *     RoleARN?: string,
     *     ComputeStatistics?: bool,
     *     ComputeTime?: int,
     *     FinishedAt?: \Aws\Api\DateTimeResult,
     *     StartedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
