<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $TrustStoreArn
 * @property 'ACTIVE'|'CREATING' $Status
 * @property int $NumberOfCaCertificates
 * @property int $TotalRevokedEntries
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     TrustStoreArn?: string,
     *     Status?: 'ACTIVE'|'CREATING',
     *     NumberOfCaCertificates?: int,
     *     TotalRevokedEntries?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
