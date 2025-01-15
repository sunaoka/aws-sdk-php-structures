<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerNameToVerify
 */
class TlsConfigInput extends Shape
{
    /**
     * @param array{ServerNameToVerify?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
