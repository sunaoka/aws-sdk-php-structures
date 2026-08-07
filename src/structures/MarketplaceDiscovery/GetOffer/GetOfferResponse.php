<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $offerId
 * @property string $catalog
 * @property string|null $offerName
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property \Aws\Api\DateTimeResult|null $availableFromTime
 * @property Shapes\SellerInformation $sellerOfRecord
 * @property list<Shapes\OfferAssociatedEntity> $associatedEntities
 * @property string $agreementProposalId
 * @property string|null $replacementAgreementId
 * @property Shapes\PricingModel $pricingModel
 * @property list<Shapes\PurchaseOptionBadge> $badges
 */
class GetOfferResponse extends Response
{
}
