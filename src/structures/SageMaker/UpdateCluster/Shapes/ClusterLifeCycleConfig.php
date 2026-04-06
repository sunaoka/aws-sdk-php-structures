<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceS3Uri
 * @property string $OnCreate
 */
class ClusterLifeCycleConfig extends Shape
{
    /**
     * @param array{
     *     SourceS3Uri: string,
     *     OnCreate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
