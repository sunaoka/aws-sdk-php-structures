<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $insecureSkipVerification
 */
class TlsConfig extends Shape
{
    /**
     * @param array{insecureSkipVerification?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
