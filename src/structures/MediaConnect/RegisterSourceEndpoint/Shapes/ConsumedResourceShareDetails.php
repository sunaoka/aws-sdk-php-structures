<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RegisterSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerAccountId
 */
class ConsumedResourceShareDetails extends Shape
{
    /**
     * @param array{OwnerAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
