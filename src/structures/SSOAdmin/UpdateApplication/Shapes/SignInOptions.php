<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationUrl
 * @property 'IDENTITY_CENTER'|'APPLICATION' $Origin
 */
class SignInOptions extends Shape
{
    /**
     * @param array{
     *     ApplicationUrl?: string|null,
     *     Origin: 'IDENTITY_CENTER'|'APPLICATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
