<?php

namespace Sunaoka\Aws\Structures\DataZone\AddEntityOwner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userIdentifier
 */
class OwnerUserProperties extends Shape
{
    /**
     * @param array{userIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
