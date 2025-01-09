<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthorizationCode
 * @property string $RedirectUri
 */
class AuthorizationCodeProperties extends Shape
{
    /**
     * @param array{
     *     AuthorizationCode?: string,
     *     RedirectUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
