<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProductId
 * @property 'ACTIVE'|'INACTIVE'|null $State
 */
class ExpressPrivateOfferConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     ProductId?: string|null,
     *     State?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
