<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreRevocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property list<int> $RevocationIds
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeTrustStoreRevocationsRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     RevocationIds?: list<int>,
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
