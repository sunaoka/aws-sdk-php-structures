<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $insecureSkipVerification
 */
class TlsConfig extends Shape
{
    /**
     * @param array{insecureSkipVerification?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
