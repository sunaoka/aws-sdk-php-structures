<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExpressPrivateOfferConfigurationEntityIdFilter|null $EntityId
 * @property ExpressPrivateOfferConfigurationProductIdFilter|null $ProductId
 * @property ExpressPrivateOfferConfigurationStateFilter|null $State
 */
class ExpressPrivateOfferConfigurationFilters extends Shape
{
    /**
     * @param array{
     *     EntityId?: ExpressPrivateOfferConfigurationEntityIdFilter|null,
     *     ProductId?: ExpressPrivateOfferConfigurationProductIdFilter|null,
     *     State?: ExpressPrivateOfferConfigurationStateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
