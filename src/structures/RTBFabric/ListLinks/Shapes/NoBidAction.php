<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $noBidReasonCode
 */
class NoBidAction extends Shape
{
    /**
     * @param array{noBidReasonCode?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
