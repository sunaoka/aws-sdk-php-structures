<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicIntegrationArn
 */
class SessionIntegrationConfiguration extends Shape
{
    /**
     * @param array{topicIntegrationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
