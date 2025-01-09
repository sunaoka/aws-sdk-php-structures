<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $confirmationUrl
 */
class HttpUrlDestinationProperties extends Shape
{
    /**
     * @param array{confirmationUrl?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
