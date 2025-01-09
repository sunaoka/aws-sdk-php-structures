<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiKeyName
 */
class ConnectionApiKeyAuthResponseParameters extends Shape
{
    /**
     * @param array{ApiKeyName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
