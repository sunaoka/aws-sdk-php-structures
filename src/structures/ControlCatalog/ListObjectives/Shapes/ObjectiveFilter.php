<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DomainResourceFilter>|null $Domains
 */
class ObjectiveFilter extends Shape
{
    /**
     * @param array{Domains?: list<DomainResourceFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
