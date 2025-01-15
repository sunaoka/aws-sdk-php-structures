<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BasicAuth
 */
class MQBrokerAccessCredentials extends Shape
{
    /**
     * @param array{BasicAuth?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
