<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2Token\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessKeyId
 * @property string $secretAccessKey
 * @property string $sessionToken
 */
class AccessToken extends Shape
{
    /**
     * @param array{
     *     accessKeyId: string,
     *     secretAccessKey: string,
     *     sessionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
