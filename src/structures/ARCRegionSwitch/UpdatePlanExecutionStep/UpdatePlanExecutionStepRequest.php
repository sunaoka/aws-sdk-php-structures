<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlanExecutionStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $executionId
 * @property string $comment
 * @property string $stepName
 * @property 'switchToUngraceful'|'skip' $actionToTake
 */
class UpdatePlanExecutionStepRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     comment: string,
     *     stepName: string,
     *     actionToTake: 'switchToUngraceful'|'skip'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
