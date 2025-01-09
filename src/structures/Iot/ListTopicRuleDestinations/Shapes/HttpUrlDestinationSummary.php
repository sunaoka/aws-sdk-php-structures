<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRuleDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $confirmationUrl
 */
class HttpUrlDestinationSummary extends Shape
{
    /**
     * @param array{confirmationUrl?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
