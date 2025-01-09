<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CompilationJobName
 * @property string $RoleArn
 * @property string $ModelPackageVersionArn
 * @property Shapes\InputConfig $InputConfig
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\NeoVpcConfig $VpcConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 */
class CreateCompilationJobRequest extends Request
{
    /**
     * @param array{
     *     CompilationJobName: string,
     *     RoleArn: string,
     *     ModelPackageVersionArn?: string,
     *     InputConfig?: Shapes\InputConfig,
     *     OutputConfig: Shapes\OutputConfig,
     *     VpcConfig?: Shapes\NeoVpcConfig,
     *     StoppingCondition: Shapes\StoppingCondition,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
