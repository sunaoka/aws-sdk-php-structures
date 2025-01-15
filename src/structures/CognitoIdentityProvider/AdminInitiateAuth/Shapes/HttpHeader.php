<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminInitiateAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $headerName
 * @property string|null $headerValue
 */
class HttpHeader extends Shape
{
    /**
     * @param array{
     *     headerName?: string|null,
     *     headerValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
