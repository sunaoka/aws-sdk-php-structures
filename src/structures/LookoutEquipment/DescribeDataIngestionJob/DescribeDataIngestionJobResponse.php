<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataIngestionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $DatasetArn
 * @property Shapes\IngestionInputConfiguration|null $IngestionInputConfiguration
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 * @property string|null $FailedReason
 * @property Shapes\DataQualitySummary|null $DataQualitySummary
 * @property Shapes\IngestedFilesSummary|null $IngestedFilesSummary
 * @property string|null $StatusDetail
 * @property int<0, max>|null $IngestedDataSize
 * @property \Aws\Api\DateTimeResult|null $DataStartTime
 * @property \Aws\Api\DateTimeResult|null $DataEndTime
 * @property string|null $SourceDatasetArn
 */
class DescribeDataIngestionJobResponse extends Response
{
}
