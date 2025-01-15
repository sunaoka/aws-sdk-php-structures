<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationCode
 * @property string|null $redirectUri
 */
class AuthorizationCodeProperties extends Shape
{
    /**
     * @param array{
     *     authorizationCode?: string|null,
     *     redirectUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
