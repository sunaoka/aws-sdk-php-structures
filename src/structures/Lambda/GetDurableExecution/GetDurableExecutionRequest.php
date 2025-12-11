<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 */
class GetDurableExecutionRequest extends Request
{
    /**
     * @param array{DurableExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
