<?php

namespace Sunaoka\Aws\Structures\Lambda\StopDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property Shapes\ErrorObject|null $Error
 */
class StopDurableExecutionRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     Error?: Shapes\ErrorObject|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
