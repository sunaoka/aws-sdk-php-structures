<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiKeyName
 */
class ConnectionApiKeyAuthResponseParameters extends Shape
{
    /**
     * @param array{ApiKeyName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
