<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource;

use Sunaoka\Aws\Structures\Response;

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
 * @property string $LogUri
 * @property string $Message
 * @property Shapes\RedshiftMetadata $RedshiftMetadata
 * @property Shapes\RDSMetadata $RDSMetadata
 * @property string $RoleARN
 * @property bool $ComputeStatistics
 * @property int $ComputeTime
 * @property \Aws\Api\DateTimeResult $FinishedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property string $DataSourceSchema
 */
class GetDataSourceResponse extends Response
{
}
