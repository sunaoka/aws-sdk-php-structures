<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GreengrassV2Component' $Type
 * @property string|null $Artifact
 * @property 'COMPLETED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class EdgePresetDeploymentOutput extends Shape
{
    /**
     * @param array{
     *     Type: 'GreengrassV2Component',
     *     Artifact?: string|null,
     *     Status?: 'COMPLETED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
