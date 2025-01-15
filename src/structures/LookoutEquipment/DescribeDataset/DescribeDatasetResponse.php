<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS'|null $Status
 * @property string|null $Schema
 * @property string|null $ServerSideKmsKeyId
 * @property Shapes\IngestionInputConfiguration|null $IngestionInputConfiguration
 * @property Shapes\DataQualitySummary|null $DataQualitySummary
 * @property Shapes\IngestedFilesSummary|null $IngestedFilesSummary
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $DataStartTime
 * @property \Aws\Api\DateTimeResult|null $DataEndTime
 * @property string|null $SourceDatasetArn
 */
class DescribeDatasetResponse extends Response
{
}
