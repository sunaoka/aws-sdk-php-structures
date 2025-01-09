<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeAccountAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Maximum
 */
class ResourceQuota extends Shape
{
    /**
     * @param array{Maximum?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
