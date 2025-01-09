<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculationExecutionId
 */
class GetCalculationExecutionStatusRequest extends Request
{
    /**
     * @param array{CalculationExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
