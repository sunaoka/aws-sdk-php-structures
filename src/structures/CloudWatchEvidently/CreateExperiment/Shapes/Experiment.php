<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property ExperimentExecution|null $execution
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property list<MetricGoal>|null $metricGoals
 * @property string $name
 * @property OnlineAbDefinition|null $onlineAbDefinition
 * @property string|null $project
 * @property string|null $randomizationSalt
 * @property int<0, 100000>|null $samplingRate
 * @property ExperimentSchedule|null $schedule
 * @property string|null $segment
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 * @property string|null $statusReason
 * @property array<string, string>|null $tags
 * @property list<Treatment>|null $treatments
 * @property 'aws.evidently.onlineab' $type
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     execution?: ExperimentExecution|null,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     metricGoals?: list<MetricGoal>|null,
     *     name: string,
     *     onlineAbDefinition?: OnlineAbDefinition|null,
     *     project?: string|null,
     *     randomizationSalt?: string|null,
     *     samplingRate?: int<0, 100000>|null,
     *     schedule?: ExperimentSchedule|null,
     *     segment?: string|null,
     *     status: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED',
     *     statusReason?: string|null,
     *     tags?: array<string, string>|null,
     *     treatments?: list<Treatment>|null,
     *     type: 'aws.evidently.onlineab'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
