<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmArn
 * @property string $alarmName
 * @property string $region
 * @property string $accountId
 * @property 'PASSED'|'FAILED'|'ERROR'|null $outcome
 * @property string|null $outcomeReason
 */
class TestRunSuccessCriteriaAlarmSummary extends Shape
{
    /**
     * @param array{
     *     alarmArn: string,
     *     alarmName: string,
     *     region: string,
     *     accountId: string,
     *     outcome?: 'PASSED'|'FAILED'|'ERROR'|null,
     *     outcomeReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
