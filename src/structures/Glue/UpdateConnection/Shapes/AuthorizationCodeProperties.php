<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthorizationCode
 * @property string|null $RedirectUri
 */
class AuthorizationCodeProperties extends Shape
{
    /**
     * @param array{
     *     AuthorizationCode?: string|null,
     *     RedirectUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
