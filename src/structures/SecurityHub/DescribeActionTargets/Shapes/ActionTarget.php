<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeActionTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionTargetArn
 * @property string $Name
 * @property string $Description
 */
class ActionTarget extends Shape
{
    /**
     * @param array{
     *     ActionTargetArn: string,
     *     Name: string,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
