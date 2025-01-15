<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientID
 */
class ConnectionOAuthClientResponseParameters extends Shape
{
    /**
     * @param array{ClientID?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
