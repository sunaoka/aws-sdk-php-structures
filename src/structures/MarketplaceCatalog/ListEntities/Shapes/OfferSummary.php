<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ProductId
 * @property string|null $ResaleAuthorizationId
 * @property string|null $ReleaseDate
 * @property string|null $AvailabilityEndDate
 * @property list<string>|null $BuyerAccounts
 * @property 'Draft'|'Released'|null $State
 * @property list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'>|null $Targeting
 */
class OfferSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ProductId?: string|null,
     *     ResaleAuthorizationId?: string|null,
     *     ReleaseDate?: string|null,
     *     AvailabilityEndDate?: string|null,
     *     BuyerAccounts?: list<string>|null,
     *     State?: 'Draft'|'Released'|null,
     *     Targeting?: list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
