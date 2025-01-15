<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ValueList
 * @property string|null $WildCardValue
 */
class ContainerProductTitleFilter extends Shape
{
    /**
     * @param array{
     *     ValueList?: list<string>|null,
     *     WildCardValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
