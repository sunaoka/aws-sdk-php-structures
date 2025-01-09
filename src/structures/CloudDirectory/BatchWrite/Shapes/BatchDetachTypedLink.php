<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkSpecifier $TypedLinkSpecifier
 */
class BatchDetachTypedLink extends Shape
{
    /**
     * @param array{TypedLinkSpecifier: TypedLinkSpecifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
