<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutionSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionArn
 * @property Shapes\ListRecoveryPlanExecutionStepsFilter|null $filter
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRecoveryPlanExecutionStepsRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanExecutionArn: string,
     *     filter?: Shapes\ListRecoveryPlanExecutionStepsFilter|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
