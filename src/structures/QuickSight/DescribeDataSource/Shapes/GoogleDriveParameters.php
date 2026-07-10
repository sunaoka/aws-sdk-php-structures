<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null $AuthType
 */
class GoogleDriveParameters extends Shape
{
    /**
     * @param array{AuthType?: 'THREE_LEGGED_OAUTH'|'TWO_LEGGED_OAUTH'|'SERVICE_ACCOUNT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
