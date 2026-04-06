<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property list<Shapes\Association>|null $associations
 * @property Shapes\JobCheckpointConfig|null $checkpointConfig
 * @property string $clientToken
 * @property Shapes\DeviceConfig $deviceConfig
 * @property array<string, string>|null $hyperParameters
 * @property list<Shapes\InputFileConfig>|null $inputDataConfig
 * @property Shapes\InstanceConfig $instanceConfig
 * @property string $jobName
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property string $roleArn
 * @property Shapes\JobStoppingCondition|null $stoppingCondition
 * @property array<string, string>|null $tags
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     algorithmSpecification: Shapes\AlgorithmSpecification,
     *     associations?: list<Shapes\Association>|null,
     *     checkpointConfig?: Shapes\JobCheckpointConfig|null,
     *     clientToken: string,
     *     deviceConfig: Shapes\DeviceConfig,
     *     hyperParameters?: array<string, string>|null,
     *     inputDataConfig?: list<Shapes\InputFileConfig>|null,
     *     instanceConfig: Shapes\InstanceConfig,
     *     jobName: string,
     *     outputDataConfig: Shapes\JobOutputDataConfig,
     *     roleArn: string,
     *     stoppingCondition?: Shapes\JobStoppingCondition|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
