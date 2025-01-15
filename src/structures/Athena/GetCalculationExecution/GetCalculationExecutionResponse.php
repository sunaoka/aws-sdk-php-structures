<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CalculationExecutionId
 * @property string|null $SessionId
 * @property string|null $Description
 * @property string|null $WorkingDirectory
 * @property Shapes\CalculationStatus|null $Status
 * @property Shapes\CalculationStatistics|null $Statistics
 * @property Shapes\CalculationResult|null $Result
 */
class GetCalculationExecutionResponse extends Response
{
}
