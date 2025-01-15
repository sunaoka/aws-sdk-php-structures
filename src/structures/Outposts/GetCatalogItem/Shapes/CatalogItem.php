<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogItemId
 * @property 'AVAILABLE'|'DISCONTINUED'|null $ItemStatus
 * @property list<EC2Capacity>|null $EC2Capacities
 * @property float|null $PowerKva
 * @property int|null $WeightLbs
 * @property list<int>|null $SupportedUplinkGbps
 * @property list<'EBS'|'S3'>|null $SupportedStorage
 */
class CatalogItem extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string|null,
     *     ItemStatus?: 'AVAILABLE'|'DISCONTINUED'|null,
     *     EC2Capacities?: list<EC2Capacity>|null,
     *     PowerKva?: float|null,
     *     WeightLbs?: int|null,
     *     SupportedUplinkGbps?: list<int>|null,
     *     SupportedStorage?: list<'EBS'|'S3'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
