<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmArn
 * @property string $alarmName
 * @property string $region
 * @property string $accountId
 */
class TestRunObservabilityAlarmSummary extends Shape
{
    /**
     * @param array{
     *     alarmArn: string,
     *     alarmName: string,
     *     region: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
