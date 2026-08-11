<?php

namespace Sunaoka\Aws\Structures\Connect\CreateMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $Name
 * @property Shapes\MetricCalculation $MetricCalculation
 * @property 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS' $Unit
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null $PositiveTrendIndicator
 * @property array<string, string>|null $Tags
 */
class CreateMetricRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Name: string,
     *     MetricCalculation: Shapes\MetricCalculation,
     *     Unit: 'INTEGER'|'DOUBLE'|'PERCENT'|'SECONDS',
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     PositiveTrendIndicator?: 'POSITIVE'|'NEGATIVE'|'NEUTRAL'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
