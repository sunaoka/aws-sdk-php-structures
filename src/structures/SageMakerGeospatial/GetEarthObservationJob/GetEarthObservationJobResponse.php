<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property Shapes\EarthObservationJobErrorDetails|null $ErrorDetails
 * @property string|null $ExecutionRoleArn
 * @property Shapes\ExportErrorDetails|null $ExportErrorDetails
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $ExportStatus
 * @property Shapes\InputConfigOutput $InputConfig
 * @property Shapes\JobConfigInput $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property list<Shapes\OutputBand>|null $OutputBands
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 */
class GetEarthObservationJobResponse extends Response
{
}
