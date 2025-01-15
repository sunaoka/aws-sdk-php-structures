<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CompilationJobName
 * @property string $RoleArn
 * @property string|null $ModelPackageVersionArn
 * @property Shapes\InputConfig|null $InputConfig
 * @property Shapes\OutputConfig $OutputConfig
 * @property Shapes\NeoVpcConfig|null $VpcConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateCompilationJobRequest extends Request
{
    /**
     * @param array{
     *     CompilationJobName: string,
     *     RoleArn: string,
     *     ModelPackageVersionArn?: string|null,
     *     InputConfig?: Shapes\InputConfig|null,
     *     OutputConfig: Shapes\OutputConfig,
     *     VpcConfig?: Shapes\NeoVpcConfig|null,
     *     StoppingCondition: Shapes\StoppingCondition,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
