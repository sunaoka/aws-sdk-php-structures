<?php

namespace Sunaoka\Aws\Structures\Athena\GetCalculationExecutionCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculationExecutionId
 */
class GetCalculationExecutionCodeRequest extends Request
{
    /**
     * @param array{CalculationExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
