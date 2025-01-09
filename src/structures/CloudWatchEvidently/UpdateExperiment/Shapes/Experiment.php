<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property ExperimentExecution $execution
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property list<MetricGoal> $metricGoals
 * @property string $name
 * @property OnlineAbDefinition $onlineAbDefinition
 * @property string $project
 * @property string $randomizationSalt
 * @property int<0, 100000> $samplingRate
 * @property ExperimentSchedule $schedule
 * @property string $segment
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 * @property string $statusReason
 * @property array<string, string> $tags
 * @property list<Treatment> $treatments
 * @property 'aws.evidently.onlineab' $type
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     execution?: ExperimentExecution,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     metricGoals?: list<MetricGoal>,
     *     name: string,
     *     onlineAbDefinition?: OnlineAbDefinition,
     *     project?: string,
     *     randomizationSalt?: string,
     *     samplingRate?: int<0, 100000>,
     *     schedule?: ExperimentSchedule,
     *     segment?: string,
     *     status: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED',
     *     statusReason?: string,
     *     tags?: array<string, string>,
     *     treatments?: list<Treatment>,
     *     type: 'aws.evidently.onlineab'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
