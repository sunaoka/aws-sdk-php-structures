<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsVpcConfiguration $awsvpcConfiguration
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{awsvpcConfiguration?: AwsVpcConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
