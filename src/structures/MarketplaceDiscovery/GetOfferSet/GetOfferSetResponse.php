<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $offerSetId
 * @property string $catalog
 * @property string|null $offerSetName
 * @property \Aws\Api\DateTimeResult|null $availableFromTime
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property string|null $buyerNotes
 * @property Shapes\SellerInformation $sellerOfRecord
 * @property list<Shapes\PurchaseOptionBadge> $badges
 * @property list<Shapes\OfferSetAssociatedEntity> $associatedEntities
 */
class GetOfferSetResponse extends Response
{
}
