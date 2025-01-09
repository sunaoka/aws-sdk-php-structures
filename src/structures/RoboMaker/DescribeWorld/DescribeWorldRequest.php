<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorld;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $world
 */
class DescribeWorldRequest extends Request
{
    /**
     * @param array{world: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
