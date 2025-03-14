<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'>|null $ValueList
 */
class OfferTargetingFilter extends Shape
{
    /**
     * @param array{ValueList?: list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
