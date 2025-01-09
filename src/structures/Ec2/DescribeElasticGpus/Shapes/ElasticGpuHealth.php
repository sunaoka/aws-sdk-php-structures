<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeElasticGpus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'IMPAIRED' $Status
 */
class ElasticGpuHealth extends Shape
{
    /**
     * @param array{Status?: 'OK'|'IMPAIRED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
