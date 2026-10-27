<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnedResourceShareDetails|null $Owned
 * @property ConsumedResourceShareDetails|null $Consumed
 */
class ResourceShareDetails extends Shape
{
    /**
     * @param array{
     *     Owned?: OwnedResourceShareDetails|null,
     *     Consumed?: ConsumedResourceShareDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
