<?php

namespace Sunaoka\Aws\Structures\Lambda\ResumeDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property string|null $ClientToken
 * @property string|null $Reason
 */
class ResumeDurableExecutionRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     ClientToken?: string|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
