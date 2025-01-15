<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateIntegration\Shapes;

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
