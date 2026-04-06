<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $experiment
 * @property list<Shapes\MetricGoalConfig>|null $metricGoals
 * @property Shapes\OnlineAbConfig|null $onlineAbConfig
 * @property string $project
 * @property string|null $randomizationSalt
 * @property bool|null $removeSegment
 * @property int<0, 100000>|null $samplingRate
 * @property string|null $segment
 * @property list<Shapes\TreatmentConfig>|null $treatments
 */
class UpdateExperimentRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     experiment: string,
     *     metricGoals?: list<Shapes\MetricGoalConfig>|null,
     *     onlineAbConfig?: Shapes\OnlineAbConfig|null,
     *     project: string,
     *     randomizationSalt?: string|null,
     *     removeSegment?: bool|null,
     *     samplingRate?: int<0, 100000>|null,
     *     segment?: string|null,
     *     treatments?: list<Shapes\TreatmentConfig>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
