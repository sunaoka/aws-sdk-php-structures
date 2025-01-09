<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelHandle
 * @property string $EdgePackagingJobName
 */
class EdgeDeploymentModelConfig extends Shape
{
    /**
     * @param array{
     *     ModelHandle: string,
     *     EdgePackagingJobName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
