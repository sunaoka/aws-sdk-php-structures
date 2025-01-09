<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BasicAuth
 */
class MQBrokerAccessCredentials extends Shape
{
    /**
     * @param array{BasicAuth?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
