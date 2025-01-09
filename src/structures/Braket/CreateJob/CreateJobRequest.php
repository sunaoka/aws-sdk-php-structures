<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property list<Shapes\Association> $associations
 * @property Shapes\JobCheckpointConfig $checkpointConfig
 * @property string $clientToken
 * @property Shapes\DeviceConfig $deviceConfig
 * @property array<string, string> $hyperParameters
 * @property list<Shapes\InputFileConfig> $inputDataConfig
 * @property Shapes\InstanceConfig $instanceConfig
 * @property string $jobName
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property string $roleArn
 * @property Shapes\JobStoppingCondition $stoppingCondition
 * @property array<string, string> $tags
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     algorithmSpecification: Shapes\AlgorithmSpecification,
     *     associations?: list<Shapes\Association>,
     *     checkpointConfig?: Shapes\JobCheckpointConfig,
     *     clientToken: string,
     *     deviceConfig: Shapes\DeviceConfig,
     *     hyperParameters?: array<string, string>,
     *     inputDataConfig?: list<Shapes\InputFileConfig>,
     *     instanceConfig: Shapes\InstanceConfig,
     *     jobName: string,
     *     outputDataConfig: Shapes\JobOutputDataConfig,
     *     roleArn: string,
     *     stoppingCondition?: Shapes\JobStoppingCondition,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
