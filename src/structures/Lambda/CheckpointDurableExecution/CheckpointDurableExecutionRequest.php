<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property string $CheckpointToken
 * @property list<Shapes\OperationUpdate>|null $Updates
 * @property string|null $ClientToken
 */
class CheckpointDurableExecutionRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     CheckpointToken: string,
     *     Updates?: list<Shapes\OperationUpdate>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
