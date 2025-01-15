<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $URL
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     URL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
