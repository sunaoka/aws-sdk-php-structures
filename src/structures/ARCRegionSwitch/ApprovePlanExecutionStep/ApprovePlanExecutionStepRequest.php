<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ApprovePlanExecutionStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $executionId
 * @property string $stepName
 * @property 'approve'|'decline' $approval
 * @property string|null $comment
 */
class ApprovePlanExecutionStepRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     stepName: string,
     *     approval: 'approve'|'decline',
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
