<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptimizationJobName
 * @property string $RoleArn
 * @property Shapes\OptimizationJobModelSource $ModelSource
 * @property 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.inf2.xlarge'|'ml.inf2.8xlarge'|'ml.inf2.24xlarge'|'ml.inf2.48xlarge'|'ml.trn1.2xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge' $DeploymentInstanceType
 * @property array<string, string> $OptimizationEnvironment
 * @property list<Shapes\OptimizationConfig> $OptimizationConfigs
 * @property Shapes\OptimizationJobOutputConfig $OutputConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\OptimizationVpcConfig $VpcConfig
 */
class CreateOptimizationJobRequest extends Request
{
    /**
     * @param array{
     *     OptimizationJobName: string,
     *     RoleArn: string,
     *     ModelSource: Shapes\OptimizationJobModelSource,
     *     DeploymentInstanceType: 'ml.p4d.24xlarge'|'ml.p4de.24xlarge'|'ml.p5.48xlarge'|'ml.g5.xlarge'|'ml.g5.2xlarge'|'ml.g5.4xlarge'|'ml.g5.8xlarge'|'ml.g5.12xlarge'|'ml.g5.16xlarge'|'ml.g5.24xlarge'|'ml.g5.48xlarge'|'ml.g6.xlarge'|'ml.g6.2xlarge'|'ml.g6.4xlarge'|'ml.g6.8xlarge'|'ml.g6.12xlarge'|'ml.g6.16xlarge'|'ml.g6.24xlarge'|'ml.g6.48xlarge'|'ml.inf2.xlarge'|'ml.inf2.8xlarge'|'ml.inf2.24xlarge'|'ml.inf2.48xlarge'|'ml.trn1.2xlarge'|'ml.trn1.32xlarge'|'ml.trn1n.32xlarge',
     *     OptimizationEnvironment?: array<string, string>,
     *     OptimizationConfigs: list<Shapes\OptimizationConfig>,
     *     OutputConfig: Shapes\OptimizationJobOutputConfig,
     *     StoppingCondition: Shapes\StoppingCondition,
     *     Tags?: list<Shapes\Tag>,
     *     VpcConfig?: Shapes\OptimizationVpcConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
