<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServiceReference>|null $added
 * @property list<ServiceReference>|null $removed
 */
class ServiceReferenceChanges extends Shape
{
    /**
     * @param array{
     *     added?: list<ServiceReference>|null,
     *     removed?: list<ServiceReference>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
