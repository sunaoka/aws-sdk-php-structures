<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Draft'|'Active'|'Restricted'> $ValueList
 */
class ResaleAuthorizationStatusFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Draft'|'Active'|'Restricted'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
