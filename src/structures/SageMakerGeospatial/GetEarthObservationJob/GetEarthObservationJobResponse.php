<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property Shapes\EarthObservationJobErrorDetails $ErrorDetails
 * @property string $ExecutionRoleArn
 * @property Shapes\ExportErrorDetails $ExportErrorDetails
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $ExportStatus
 * @property Shapes\InputConfigOutput $InputConfig
 * @property Shapes\JobConfigInput $JobConfig
 * @property string $KmsKeyId
 * @property string $Name
 * @property list<Shapes\OutputBand> $OutputBands
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string> $Tags
 */
class GetEarthObservationJobResponse extends Response
{
}
