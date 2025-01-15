<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property string $ExecutionRoleArn
 * @property Shapes\VectorEnrichmentJobInputConfig $InputConfig
 * @property Shapes\VectorEnrichmentJobConfig $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'STOPPED'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 * @property 'REVERSE_GEOCODING'|'MAP_MATCHING' $Type
 */
class StartVectorEnrichmentJobResponse extends Response
{
}
