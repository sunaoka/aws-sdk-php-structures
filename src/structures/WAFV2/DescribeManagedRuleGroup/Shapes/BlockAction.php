<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomResponse|null $CustomResponse
 */
class BlockAction extends Shape
{
    /**
     * @param array{CustomResponse?: CustomResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
