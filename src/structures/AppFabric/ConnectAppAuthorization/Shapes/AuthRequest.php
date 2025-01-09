<?php

namespace Sunaoka\Aws\Structures\AppFabric\ConnectAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $redirectUri
 * @property string $code
 */
class AuthRequest extends Shape
{
    /**
     * @param array{
     *     redirectUri: string,
     *     code: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
