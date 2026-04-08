<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $purchaseOptionId
 * @property string $catalog
 * @property 'OFFER'|'OFFERSET' $purchaseOptionType
 * @property string|null $purchaseOptionName
 * @property \Aws\Api\DateTimeResult|null $availableFromTime
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property SellerInformation $sellerOfRecord
 * @property list<PurchaseOptionBadge>|null $badges
 * @property list<PurchaseOptionAssociatedEntity> $associatedEntities
 */
class PurchaseOptionSummary extends Shape
{
    /**
     * @param array{
     *     purchaseOptionId: string,
     *     catalog: string,
     *     purchaseOptionType: 'OFFER'|'OFFERSET',
     *     purchaseOptionName?: string|null,
     *     availableFromTime?: \Aws\Api\DateTimeResult|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null,
     *     sellerOfRecord: SellerInformation,
     *     badges?: list<PurchaseOptionBadge>|null,
     *     associatedEntities: list<PurchaseOptionAssociatedEntity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
