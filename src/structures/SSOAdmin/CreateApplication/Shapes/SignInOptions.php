<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IDENTITY_CENTER'|'APPLICATION' $Origin
 * @property string|null $ApplicationUrl
 */
class SignInOptions extends Shape
{
    /**
     * @param array{
     *     Origin: 'IDENTITY_CENTER'|'APPLICATION',
     *     ApplicationUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
