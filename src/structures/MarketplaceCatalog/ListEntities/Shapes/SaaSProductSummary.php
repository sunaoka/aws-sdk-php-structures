<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProductTitle
 * @property 'Limited'|'Public'|'Restricted'|'Draft' $Visibility
 */
class SaaSProductSummary extends Shape
{
    /**
     * @param array{
     *     ProductTitle?: string,
     *     Visibility?: 'Limited'|'Public'|'Restricted'|'Draft'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
