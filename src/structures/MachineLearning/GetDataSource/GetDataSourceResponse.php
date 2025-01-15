<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetDataSource;

use Sunaoka\Aws\Structures\Response;

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
 * @property string|null $LogUri
 * @property string|null $Message
 * @property Shapes\RedshiftMetadata|null $RedshiftMetadata
 * @property Shapes\RDSMetadata|null $RDSMetadata
 * @property string|null $RoleARN
 * @property bool|null $ComputeStatistics
 * @property int|null $ComputeTime
 * @property \Aws\Api\DateTimeResult|null $FinishedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property string|null $DataSourceSchema
 */
class GetDataSourceResponse extends Response
{
}
