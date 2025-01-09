<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculationExecutionId
 * @property 'CREATING'|'CREATED'|'QUEUED'|'RUNNING'|'CANCELING'|'CANCELED'|'COMPLETED'|'FAILED' $State
 */
class StartCalculationExecutionResponse extends Response
{
}
