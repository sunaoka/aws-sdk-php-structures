<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelVersion
 */
class EdgeModelSummary extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
