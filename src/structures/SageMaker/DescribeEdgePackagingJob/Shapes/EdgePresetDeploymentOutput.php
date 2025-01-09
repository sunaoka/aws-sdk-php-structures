<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassV2Component' $Type
 * @property string $Artifact
 * @property 'COMPLETED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class EdgePresetDeploymentOutput extends Shape
{
    /**
     * @param array{
     *     Type: 'GreengrassV2Component',
     *     Artifact?: string,
     *     Status?: 'COMPLETED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
