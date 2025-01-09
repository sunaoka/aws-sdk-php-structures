<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationCode
 * @property string $redirectUri
 */
class AuthorizationCodeProperties extends Shape
{
    /**
     * @param array{
     *     authorizationCode?: string,
     *     redirectUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
