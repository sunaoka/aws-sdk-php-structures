<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ProductId
 * @property string $ResaleAuthorizationId
 * @property string $ReleaseDate
 * @property string $AvailabilityEndDate
 * @property list<string> $BuyerAccounts
 * @property 'Draft'|'Released' $State
 * @property list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'> $Targeting
 */
class OfferSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ProductId?: string,
     *     ResaleAuthorizationId?: string,
     *     ReleaseDate?: string,
     *     AvailabilityEndDate?: string,
     *     BuyerAccounts?: list<string>,
     *     State?: 'Draft'|'Released',
     *     Targeting?: list<'BuyerAccounts'|'ParticipatingPrograms'|'CountryCodes'|'None'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
