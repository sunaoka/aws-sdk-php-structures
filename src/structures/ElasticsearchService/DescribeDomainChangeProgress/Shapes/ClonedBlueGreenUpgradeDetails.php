<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeDomainChangeProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrafficPercents|null $TrafficSplit
 * @property ClonedBlueGreenScheduledAction|null $ScheduledAction
 * @property int|null $RetentionInHours
 */
class ClonedBlueGreenUpgradeDetails extends Shape
{
    /**
     * @param array{
     *     TrafficSplit?: TrafficPercents|null,
     *     ScheduledAction?: ClonedBlueGreenScheduledAction|null,
     *     RetentionInHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
