<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'INTERNAL_FAILURE'|null $Type
 */
class ActionConnectorError extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Type?: 'INTERNAL_FAILURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
