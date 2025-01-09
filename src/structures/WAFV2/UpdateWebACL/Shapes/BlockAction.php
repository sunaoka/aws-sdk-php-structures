<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomResponse $CustomResponse
 */
class BlockAction extends Shape
{
    /**
     * @param array{CustomResponse?: CustomResponse} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
