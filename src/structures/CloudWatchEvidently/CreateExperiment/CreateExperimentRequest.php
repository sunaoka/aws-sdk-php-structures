<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property list<Shapes\MetricGoalConfig> $metricGoals
 * @property string $name
 * @property Shapes\OnlineAbConfig $onlineAbConfig
 * @property string $project
 * @property string $randomizationSalt
 * @property int<0, 100000> $samplingRate
 * @property string $segment
 * @property array<string, string> $tags
 * @property list<Shapes\TreatmentConfig> $treatments
 */
class CreateExperimentRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     metricGoals: list<Shapes\MetricGoalConfig>,
     *     name: string,
     *     onlineAbConfig?: Shapes\OnlineAbConfig,
     *     project: string,
     *     randomizationSalt?: string,
     *     samplingRate?: int<0, 100000>,
     *     segment?: string,
     *     tags?: array<string, string>,
     *     treatments: list<Shapes\TreatmentConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
