<?php

namespace Sunaoka\Aws\Structures\Lambda\PauseDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property string|null $ClientToken
 * @property string|null $Reason
 * @property bool|null $ExecutionTimeoutPaused
 */
class PauseDurableExecutionRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     ClientToken?: string|null,
     *     Reason?: string|null,
     *     ExecutionTimeoutPaused?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
