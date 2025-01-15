<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $TrustStoreArn
 * @property 'ACTIVE'|'CREATING'|null $Status
 * @property int|null $NumberOfCaCertificates
 * @property int|null $TotalRevokedEntries
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TrustStoreArn?: string|null,
     *     Status?: 'ACTIVE'|'CREATING'|null,
     *     NumberOfCaCertificates?: int|null,
     *     TotalRevokedEntries?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
