<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCatalogItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogItemId
 * @property 'AVAILABLE'|'DISCONTINUED' $ItemStatus
 * @property list<EC2Capacity> $EC2Capacities
 * @property float $PowerKva
 * @property int $WeightLbs
 * @property list<int> $SupportedUplinkGbps
 * @property list<'EBS'|'S3'> $SupportedStorage
 */
class CatalogItem extends Shape
{
    /**
     * @param array{
     *     CatalogItemId?: string,
     *     ItemStatus?: 'AVAILABLE'|'DISCONTINUED',
     *     EC2Capacities?: list<EC2Capacity>,
     *     PowerKva?: float,
     *     WeightLbs?: int,
     *     SupportedUplinkGbps?: list<int>,
     *     SupportedStorage?: list<'EBS'|'S3'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
