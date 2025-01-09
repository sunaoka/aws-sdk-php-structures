<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 */
class DomainUnitUserProperties extends Shape
{
    /**
     * @param array{userId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
