<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 */
class ElasticGpuSpecificationResponse extends Shape
{
    /**
     * @param array{Type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
