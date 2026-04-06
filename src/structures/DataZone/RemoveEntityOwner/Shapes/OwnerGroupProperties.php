<?php

namespace Sunaoka\Aws\Structures\DataZone\RemoveEntityOwner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupIdentifier
 */
class OwnerGroupProperties extends Shape
{
    /**
     * @param array{groupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
