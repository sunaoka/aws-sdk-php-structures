<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property array<string, string>|null $KeyAttributes
 * @property string|null $OperationName
 * @property DependencyConfig|null $DependencyConfig
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property 'PeriodBased'|'RequestBased'|null $EvaluationType
 * @property 'ServiceOperation'|'CloudWatchMetric'|'ServiceDependency'|null $MetricSourceType
 */
class ServiceLevelObjectiveSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     KeyAttributes?: array<string, string>|null,
     *     OperationName?: string|null,
     *     DependencyConfig?: DependencyConfig|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EvaluationType?: 'PeriodBased'|'RequestBased'|null,
     *     MetricSourceType?: 'ServiceOperation'|'CloudWatchMetric'|'ServiceDependency'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
