<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class ElasticGpuSpecification extends Shape
{
    /**
     * @param array{Type: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
