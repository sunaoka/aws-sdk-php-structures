<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsVpcConfiguration|null $awsvpcConfiguration
 */
class NetworkConfiguration extends Shape
{
    /**
     * @param array{awsvpcConfiguration?: AwsVpcConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
