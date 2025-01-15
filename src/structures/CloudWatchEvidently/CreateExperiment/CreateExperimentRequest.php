<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\MetricGoalConfig> $metricGoals
 * @property string $name
 * @property Shapes\OnlineAbConfig|null $onlineAbConfig
 * @property string $project
 * @property string|null $randomizationSalt
 * @property int<0, 100000>|null $samplingRate
 * @property string|null $segment
 * @property array<string, string>|null $tags
 * @property list<Shapes\TreatmentConfig> $treatments
 */
class CreateExperimentRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     metricGoals: list<Shapes\MetricGoalConfig>,
     *     name: string,
     *     onlineAbConfig?: Shapes\OnlineAbConfig|null,
     *     project: string,
     *     randomizationSalt?: string|null,
     *     samplingRate?: int<0, 100000>|null,
     *     segment?: string|null,
     *     tags?: array<string, string>|null,
     *     treatments: list<Shapes\TreatmentConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
