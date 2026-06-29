<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartExperimentRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $ExperimentDefinitionId
 * @property int|null $Run
 * @property string|null $Description
 * @property 'RUNNING'|'DONE'|null $Status
 * @property float|null $ExposurePercentage
 * @property Shapes\TreatmentOverrides|null $TreatmentOverrides
 * @property Shapes\ExperimentRunResult|null $Result
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property Shapes\ExperimentDefinitionSnapshot|null $ExperimentDefinitionSnapshot
 */
class StartExperimentRunResponse extends Response
{
}
