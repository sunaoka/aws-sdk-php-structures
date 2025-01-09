<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $URL
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     URL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
