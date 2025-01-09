<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupArn
 */
class Greengrass extends Shape
{
    /**
     * @param array{groupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
