<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CancelPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $executionId
 * @property string|null $comment
 */
class CancelPlanExecutionRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
