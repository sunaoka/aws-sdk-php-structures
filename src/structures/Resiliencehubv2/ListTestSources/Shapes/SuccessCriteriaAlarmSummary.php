<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $alarmArn
 * @property string $alarmName
 * @property string $region
 * @property string $accountId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class SuccessCriteriaAlarmSummary extends Shape
{
    /**
     * @param array{
     *     alarmArn: string,
     *     alarmName: string,
     *     region: string,
     *     accountId: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
