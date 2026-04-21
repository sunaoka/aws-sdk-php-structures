<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIBenchmarkJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIBenchmarkJobName
 * @property Shapes\AIBenchmarkTarget $BenchmarkTarget
 * @property Shapes\AIBenchmarkOutputConfig $OutputConfig
 * @property string $AIWorkloadConfigIdentifier
 * @property string $RoleArn
 * @property Shapes\AIBenchmarkNetworkConfig|null $NetworkConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAIBenchmarkJobRequest extends Request
{
    /**
     * @param array{
     *     AIBenchmarkJobName: string,
     *     BenchmarkTarget: Shapes\AIBenchmarkTarget,
     *     OutputConfig: Shapes\AIBenchmarkOutputConfig,
     *     AIWorkloadConfigIdentifier: string,
     *     RoleArn: string,
     *     NetworkConfig?: Shapes\AIBenchmarkNetworkConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
