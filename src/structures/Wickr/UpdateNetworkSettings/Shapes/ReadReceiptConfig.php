<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateNetworkSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'FORCE_ENABLED'|null $status
 */
class ReadReceiptConfig extends Shape
{
    /**
     * @param array{status?: 'DISABLED'|'ENABLED'|'FORCE_ENABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
