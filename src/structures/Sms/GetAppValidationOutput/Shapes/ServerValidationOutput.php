<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Server|null $server
 */
class ServerValidationOutput extends Shape
{
    /**
     * @param array{server?: Server|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
