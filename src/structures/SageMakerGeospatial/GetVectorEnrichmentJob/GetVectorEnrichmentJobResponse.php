<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property Shapes\VectorEnrichmentJobErrorDetails $ErrorDetails
 * @property string $ExecutionRoleArn
 * @property Shapes\VectorEnrichmentJobExportErrorDetails $ExportErrorDetails
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $ExportStatus
 * @property Shapes\VectorEnrichmentJobInputConfig $InputConfig
 * @property Shapes\VectorEnrichmentJobConfig $JobConfig
 * @property string $KmsKeyId
 * @property string $Name
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'STOPPED'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string> $Tags
 * @property 'REVERSE_GEOCODING'|'MAP_MATCHING' $Type
 */
class GetVectorEnrichmentJobResponse extends Response
{
}
