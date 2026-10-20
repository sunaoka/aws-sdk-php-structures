<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ACTIVE'|'INACTIVE'>|null $ValueList
 */
class ExpressPrivateOfferConfigurationStateFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'ACTIVE'|'INACTIVE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
