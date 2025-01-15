<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property Shapes\VectorEnrichmentJobErrorDetails|null $ErrorDetails
 * @property string $ExecutionRoleArn
 * @property Shapes\VectorEnrichmentJobExportErrorDetails|null $ExportErrorDetails
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $ExportStatus
 * @property Shapes\VectorEnrichmentJobInputConfig $InputConfig
 * @property Shapes\VectorEnrichmentJobConfig $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'STOPPED'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 * @property 'REVERSE_GEOCODING'|'MAP_MATCHING' $Type
 */
class GetVectorEnrichmentJobResponse extends Response
{
}
