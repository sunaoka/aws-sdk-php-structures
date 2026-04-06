<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metricName
 * @property 'Mean'|'TreatmentEffect'|'ConfidenceIntervalUpperBound'|'ConfidenceIntervalLowerBound'|'PValue'|null $resultStat
 * @property string|null $treatmentName
 * @property list<double>|null $values
 */
class ExperimentResultsData extends Shape
{
    /**
     * @param array{
     *     metricName?: string|null,
     *     resultStat?: 'Mean'|'TreatmentEffect'|'ConfidenceIntervalUpperBound'|'ConfidenceIntervalLowerBound'|'PValue'|null,
     *     treatmentName?: string|null,
     *     values?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
