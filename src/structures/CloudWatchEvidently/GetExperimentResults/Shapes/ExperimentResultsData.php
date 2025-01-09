<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metricName
 * @property 'Mean'|'TreatmentEffect'|'ConfidenceIntervalUpperBound'|'ConfidenceIntervalLowerBound'|'PValue' $resultStat
 * @property string $treatmentName
 * @property list<double> $values
 */
class ExperimentResultsData extends Shape
{
    /**
     * @param array{
     *     metricName?: string,
     *     resultStat?: 'Mean'|'TreatmentEffect'|'ConfidenceIntervalUpperBound'|'ConfidenceIntervalLowerBound'|'PValue',
     *     treatmentName?: string,
     *     values?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
