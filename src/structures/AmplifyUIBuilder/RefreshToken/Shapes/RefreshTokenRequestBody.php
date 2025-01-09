<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\RefreshToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $token
 * @property string $clientId
 */
class RefreshTokenRequestBody extends Shape
{
    /**
     * @param array{
     *     token: string,
     *     clientId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
