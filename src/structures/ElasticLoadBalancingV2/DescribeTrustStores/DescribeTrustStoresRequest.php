<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrustStoreArns
 * @property list<string> $Names
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeTrustStoresRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArns?: list<string>,
     *     Names?: list<string>,
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
