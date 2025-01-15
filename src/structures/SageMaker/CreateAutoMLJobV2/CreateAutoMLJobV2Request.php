<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoMLJobName
 * @property list<Shapes\AutoMLJobChannel> $AutoMLJobInputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property Shapes\AutoMLProblemTypeConfig $AutoMLProblemTypeConfig
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AutoMLSecurityConfig|null $SecurityConfig
 * @property Shapes\AutoMLJobObjective|null $AutoMLJobObjective
 * @property Shapes\ModelDeployConfig|null $ModelDeployConfig
 * @property Shapes\AutoMLDataSplitConfig|null $DataSplitConfig
 * @property Shapes\AutoMLComputeConfig|null $AutoMLComputeConfig
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
     *     Tags?: list<Shapes\Tag>|null,
     *     SecurityConfig?: Shapes\AutoMLSecurityConfig|null,
     *     AutoMLJobObjective?: Shapes\AutoMLJobObjective|null,
     *     ModelDeployConfig?: Shapes\ModelDeployConfig|null,
     *     DataSplitConfig?: Shapes\AutoMLDataSplitConfig|null,
     *     AutoMLComputeConfig?: Shapes\AutoMLComputeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
