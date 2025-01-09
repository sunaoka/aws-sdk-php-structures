<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImplicitDeny $implicitDeny
 * @property ExplicitDeny $explicitDeny
 */
class Denied extends Shape
{
    /**
     * @param array{
     *     implicitDeny?: ImplicitDeny,
     *     explicitDeny?: ExplicitDeny
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
