<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Draft'|'Released'>|null $ValueList
 */
class OfferStateFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Draft'|'Released'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
