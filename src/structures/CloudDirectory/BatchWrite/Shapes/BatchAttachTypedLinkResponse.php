<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TypedLinkSpecifier|null $TypedLinkSpecifier
 */
class BatchAttachTypedLinkResponse extends Shape
{
    /**
     * @param array{TypedLinkSpecifier?: TypedLinkSpecifier|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
