<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 */
class SpaceQuickSightResourceDetails extends Shape
{
    /**
     * @param array{resourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
