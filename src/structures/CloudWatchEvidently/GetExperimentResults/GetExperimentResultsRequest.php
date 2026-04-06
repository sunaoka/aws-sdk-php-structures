<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Mean'|null $baseStat
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $experiment
 * @property list<string> $metricNames
 * @property int<300, 90000>|null $period
 * @property string $project
 * @property list<'BayesianInference'>|null $reportNames
 * @property list<'BaseStat'|'TreatmentEffect'|'ConfidenceInterval'|'PValue'>|null $resultStats
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property list<string> $treatmentNames
 */
class GetExperimentResultsRequest extends Request
{
    /**
     * @param array{
     *     baseStat?: 'Mean'|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     experiment: string,
     *     metricNames: list<string>,
     *     period?: int<300, 90000>|null,
     *     project: string,
     *     reportNames?: list<'BayesianInference'>|null,
     *     resultStats?: list<'BaseStat'|'TreatmentEffect'|'ConfidenceInterval'|'PValue'>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     treatmentNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
