<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property list<Shapes\AutoMLJobChannel> $AutoMLJobInputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property Shapes\AutoMLProblemTypeConfig $AutoMLProblemTypeConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AutoMLSecurityConfig $SecurityConfig
 * @property Shapes\AutoMLJobObjective $AutoMLJobObjective
 * @property Shapes\ModelDeployConfig $ModelDeployConfig
 * @property Shapes\AutoMLDataSplitConfig $DataSplitConfig
 * @property Shapes\AutoMLComputeConfig $AutoMLComputeConfig
 */
class CreateAutoMLJobV2Request extends Request
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     AutoMLJobInputDataConfig: list<Shapes\AutoMLJobChannel>,
     *     OutputDataConfig: Shapes\AutoMLOutputDataConfig,
     *     AutoMLProblemTypeConfig: Shapes\AutoMLProblemTypeConfig,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     SecurityConfig?: Shapes\AutoMLSecurityConfig,
     *     AutoMLJobObjective?: Shapes\AutoMLJobObjective,
     *     ModelDeployConfig?: Shapes\ModelDeployConfig,
     *     DataSplitConfig?: Shapes\AutoMLDataSplitConfig,
     *     AutoMLComputeConfig?: Shapes\AutoMLComputeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
