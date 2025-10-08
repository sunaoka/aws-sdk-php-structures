<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $executionId
 * @property 'switchToGraceful'|'switchToUngraceful'|'pause'|'resume' $action
 * @property string|null $comment
 */
class UpdatePlanExecutionRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     action: 'switchToGraceful'|'switchToUngraceful'|'pause'|'resume',
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
