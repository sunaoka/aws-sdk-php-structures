<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsWifiEnabled
 */
class WirelessConnection extends Shape
{
    /**
     * @param array{IsWifiEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
