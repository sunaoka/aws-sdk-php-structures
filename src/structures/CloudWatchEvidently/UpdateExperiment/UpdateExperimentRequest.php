<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $experiment
 * @property list<Shapes\MetricGoalConfig> $metricGoals
 * @property Shapes\OnlineAbConfig $onlineAbConfig
 * @property string $project
 * @property string $randomizationSalt
 * @property bool $removeSegment
 * @property int<0, 100000> $samplingRate
 * @property string $segment
 * @property list<Shapes\TreatmentConfig> $treatments
 */
class UpdateExperimentRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     experiment: string,
     *     metricGoals?: list<Shapes\MetricGoalConfig>,
     *     onlineAbConfig?: Shapes\OnlineAbConfig,
     *     project: string,
     *     randomizationSalt?: string,
     *     removeSegment?: bool,
     *     samplingRate?: int<0, 100000>,
     *     segment?: string,
     *     treatments?: list<Shapes\TreatmentConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
