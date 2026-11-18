<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 */
class DeleteDurableExecutionRequest extends Request
{
    /**
     * @param array{DurableExecutionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
