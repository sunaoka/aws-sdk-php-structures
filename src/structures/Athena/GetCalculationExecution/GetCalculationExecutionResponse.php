<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CalculationExecutionId
 * @property string $SessionId
 * @property string $Description
 * @property string $WorkingDirectory
 * @property Shapes\CalculationStatus $Status
 * @property Shapes\CalculationStatistics $Statistics
 * @property Shapes\CalculationResult $Result
 */
class GetCalculationExecutionResponse extends Response
{
}
