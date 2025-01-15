<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property string $ExecutionRoleArn
 * @property Shapes\InputConfigOutput|null $InputConfig
 * @property Shapes\JobConfigInput $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'COMPLETED'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 */
class StartEarthObservationJobResponse extends Response
{
}
