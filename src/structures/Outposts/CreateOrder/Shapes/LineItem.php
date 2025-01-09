<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogItemId
 * @property string $LineItemId
 * @property int<1, max> $Quantity
 * @property 'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED' $Status
 * @property ShipmentInformation $ShipmentInformation
 * @property list<LineItemAssetInformation> $AssetInformationList
 * @property string $PreviousLineItemId
 * @property string $PreviousOrderId
 */
class LineItem extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string,
     *     LineItemId?: string,
     *     Quantity?: int<1, max>,
     *     Status?: 'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED',
     *     ShipmentInformation?: ShipmentInformation,
     *     AssetInformationList?: list<LineItemAssetInformation>,
     *     PreviousLineItemId?: string,
     *     PreviousOrderId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
