<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationNfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AgentArns
 */
class OnPremConfig extends Shape
{
    /**
     * @param array{AgentArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
