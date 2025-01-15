<?php

namespace Sunaoka\Aws\Structures\Iot\TestAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImplicitDeny|null $implicitDeny
 * @property ExplicitDeny|null $explicitDeny
 */
class Denied extends Shape
{
    /**
     * @param array{
     *     implicitDeny?: ImplicitDeny|null,
     *     explicitDeny?: ExplicitDeny|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
