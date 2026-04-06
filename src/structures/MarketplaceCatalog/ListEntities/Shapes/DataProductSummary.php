<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductTitle
 * @property 'Limited'|'Public'|'Restricted'|'Unavailable'|'Draft'|null $Visibility
 */
class DataProductSummary extends Shape
{
    /**
     * @param array{
     *     ProductTitle?: string|null,
     *     Visibility?: 'Limited'|'Public'|'Restricted'|'Unavailable'|'Draft'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
