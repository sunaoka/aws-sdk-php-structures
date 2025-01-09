<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Limited'|'Public'|'Restricted'|'Draft'> $ValueList
 */
class AmiProductVisibilityFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Limited'|'Public'|'Restricted'|'Draft'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
