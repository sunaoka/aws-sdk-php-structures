<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientID
 */
class ConnectionOAuthClientResponseParameters extends Shape
{
    /**
     * @param array{ClientID?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
