<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogItemId
 * @property string|null $LineItemId
 * @property int<1, max>|null $Quantity
 * @property 'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED'|null $Status
 * @property ShipmentInformation|null $ShipmentInformation
 * @property list<LineItemAssetInformation>|null $AssetInformationList
 * @property string|null $PreviousLineItemId
 * @property string|null $PreviousOrderId
 */
class LineItem extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string|null,
     *     LineItemId?: string|null,
     *     Quantity?: int<1, max>|null,
     *     Status?: 'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED'|null,
     *     ShipmentInformation?: ShipmentInformation|null,
     *     AssetInformationList?: list<LineItemAssetInformation>|null,
     *     PreviousLineItemId?: string|null,
     *     PreviousOrderId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
