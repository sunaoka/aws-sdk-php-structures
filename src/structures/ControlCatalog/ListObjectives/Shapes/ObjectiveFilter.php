<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DomainResourceFilter> $Domains
 */
class ObjectiveFilter extends Shape
{
    /**
     * @param array{Domains?: list<DomainResourceFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
