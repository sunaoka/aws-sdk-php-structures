<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomainUnit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 */
class DomainUnitGroupProperties extends Shape
{
    /**
     * @param array{groupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
