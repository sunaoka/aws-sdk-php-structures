<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Renew'>|null $ValueList
 */
class OfferTargetAgreementIntentFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'Renew'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
