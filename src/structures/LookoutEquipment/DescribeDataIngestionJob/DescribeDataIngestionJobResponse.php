<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $DatasetArn
 * @property Shapes\IngestionInputConfiguration $IngestionInputConfiguration
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 * @property string $FailedReason
 * @property Shapes\DataQualitySummary $DataQualitySummary
 * @property Shapes\IngestedFilesSummary $IngestedFilesSummary
 * @property string $StatusDetail
 * @property int $IngestedDataSize
 * @property \Aws\Api\DateTimeResult $DataStartTime
 * @property \Aws\Api\DateTimeResult $DataEndTime
 * @property string $SourceDatasetArn
 */
class DescribeDataIngestionJobResponse extends Response
{
}
