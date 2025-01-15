<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Limited'|'Public'|'Restricted'|'Unavailable'|'Draft'>|null $ValueList
 */
class DataProductVisibilityFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Limited'|'Public'|'Restricted'|'Unavailable'|'Draft'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
