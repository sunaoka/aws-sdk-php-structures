<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property list<Shapes\InputFileConfig>|null $inputDataConfig
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property Shapes\JobCheckpointConfig|null $checkpointConfig
 * @property string $jobName
 * @property string $roleArn
 * @property Shapes\JobStoppingCondition|null $stoppingCondition
 * @property Shapes\InstanceConfig $instanceConfig
 * @property array<string, string>|null $hyperParameters
 * @property Shapes\DeviceConfig $deviceConfig
 * @property array<string, string>|null $tags
 * @property list<Shapes\Association>|null $associations
 */
class CreateJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     algorithmSpecification: Shapes\AlgorithmSpecification,
     *     inputDataConfig?: list<Shapes\InputFileConfig>|null,
     *     outputDataConfig: Shapes\JobOutputDataConfig,
     *     checkpointConfig?: Shapes\JobCheckpointConfig|null,
     *     jobName: string,
     *     roleArn: string,
     *     stoppingCondition?: Shapes\JobStoppingCondition|null,
     *     instanceConfig: Shapes\InstanceConfig,
     *     hyperParameters?: array<string, string>|null,
     *     deviceConfig: Shapes\DeviceConfig,
     *     tags?: array<string, string>|null,
     *     associations?: list<Shapes\Association>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
