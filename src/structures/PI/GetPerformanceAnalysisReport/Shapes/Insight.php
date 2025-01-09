<?php

namespace Sunaoka\Aws\Structures\PI\GetPerformanceAnalysisReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InsightId
 * @property string $InsightType
 * @property 'CAUSAL'|'CONTEXTUAL' $Context
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'LOW'|'MEDIUM'|'HIGH' $Severity
 * @property list<Insight> $SupportingInsights
 * @property string $Description
 * @property list<Recommendation> $Recommendations
 * @property list<Data> $InsightData
 * @property list<Data> $BaselineData
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     InsightId: string,
     *     InsightType?: string,
     *     Context?: 'CAUSAL'|'CONTEXTUAL',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Severity?: 'LOW'|'MEDIUM'|'HIGH',
     *     SupportingInsights?: list<Insight>,
     *     Description?: string,
     *     Recommendations?: list<Recommendation>,
     *     InsightData?: list<Data>,
     *     BaselineData?: list<Data>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
