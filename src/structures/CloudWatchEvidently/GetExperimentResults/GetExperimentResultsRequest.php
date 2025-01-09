<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperimentResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Mean' $baseStat
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $experiment
 * @property list<string> $metricNames
 * @property int<300, 90000> $period
 * @property string $project
 * @property list<'BayesianInference'> $reportNames
 * @property list<'BaseStat'|'TreatmentEffect'|'ConfidenceInterval'|'PValue'> $resultStats
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<string> $treatmentNames
 */
class GetExperimentResultsRequest extends Request
{
    /**
     * @param array{
     *     baseStat?: 'Mean',
     *     endTime?: \Aws\Api\DateTimeResult,
     *     experiment: string,
     *     metricNames: list<string>,
     *     period?: int<300, 90000>,
     *     project: string,
     *     reportNames?: list<'BayesianInference'>,
     *     resultStats?: list<'BaseStat'|'TreatmentEffect'|'ConfidenceInterval'|'PValue'>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     treatmentNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
