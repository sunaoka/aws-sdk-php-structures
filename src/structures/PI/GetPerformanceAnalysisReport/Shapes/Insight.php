<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightId
 * @property string|null $InsightType
 * @property 'CAUSAL'|'CONTEXTUAL'|null $Context
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $Severity
 * @property list<Insight>|null $SupportingInsights
 * @property string|null $Description
 * @property list<Recommendation>|null $Recommendations
 * @property list<Data>|null $InsightData
 * @property list<Data>|null $BaselineData
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightId: string,
     *     InsightType?: string|null,
     *     Context?: 'CAUSAL'|'CONTEXTUAL'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     SupportingInsights?: list<Insight>|null,
     *     Description?: string|null,
     *     Recommendations?: list<Recommendation>|null,
     *     InsightData?: list<Data>|null,
     *     BaselineData?: list<Data>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
