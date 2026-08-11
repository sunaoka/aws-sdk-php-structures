<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateMetricContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $MetricId
 * @property Shapes\MetricCalculation|null $MetricCalculation
 * @property 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS'|null $Unit
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null $PositiveTrendIndicator
 */
class UpdateMetricContentRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     MetricId: string,
     *     MetricCalculation?: Shapes\MetricCalculation|null,
     *     Unit?: 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS'|null,
     *     PositiveTrendIndicator?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
