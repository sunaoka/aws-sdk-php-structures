<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ValueList
 * @property string $WildCardValue
 */
class ResaleAuthorizationManufacturerLegalNameFilter extends Shape
{
    /**
     * @param array{
     *     ValueList?: list<string>,
     *     WildCardValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
