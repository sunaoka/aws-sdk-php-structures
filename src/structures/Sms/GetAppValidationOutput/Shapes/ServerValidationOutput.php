<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server $server
 */
class ServerValidationOutput extends Shape
{
    /**
     * @param array{server?: Server} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
