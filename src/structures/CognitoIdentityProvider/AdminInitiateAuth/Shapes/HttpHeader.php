<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $headerName
 * @property string $headerValue
 */
class HttpHeader extends Shape
{
    /**
     * @param array{
     *     headerName?: string,
     *     headerValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
