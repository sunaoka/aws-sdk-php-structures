<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS' $Status
 * @property string $Schema
 * @property string $ServerSideKmsKeyId
 * @property Shapes\IngestionInputConfiguration $IngestionInputConfiguration
 * @property Shapes\DataQualitySummary $DataQualitySummary
 * @property Shapes\IngestedFilesSummary $IngestedFilesSummary
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $DataStartTime
 * @property \Aws\Api\DateTimeResult $DataEndTime
 * @property string $SourceDatasetArn
 */
class DescribeDatasetResponse extends Response
{
}
