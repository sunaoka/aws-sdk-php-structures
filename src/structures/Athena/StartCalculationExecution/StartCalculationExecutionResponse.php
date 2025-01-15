<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CalculationExecutionId
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED'|null $State
 */
class StartCalculationExecutionResponse extends Response
{
}
