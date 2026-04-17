<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceS3Uri
 * @property string|null $OnCreate
 * @property string|null $OnInitComplete
 */
class ClusterLifeCycleConfig extends Shape
{
    /**
     * @param array{
     *     SourceS3Uri?: string|null,
     *     OnCreate?: string|null,
     *     OnInitComplete?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
