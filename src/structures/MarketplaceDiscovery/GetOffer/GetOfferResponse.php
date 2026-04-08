<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $offerId
 * @property string $catalog
 * @property string|null $offerName
 * @property string $agreementProposalId
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property \Aws\Api\DateTimeResult|null $availableFromTime
 * @property Shapes\SellerInformation $sellerOfRecord
 * @property string|null $replacementAgreementId
 * @property Shapes\PricingModel $pricingModel
 * @property list<Shapes\PurchaseOptionBadge> $badges
 * @property list<Shapes\OfferAssociatedEntity> $associatedEntities
 */
class GetOfferResponse extends Response
{
}
