<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrustStoreArns
 * @property list<string> $Names
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeTrustStoresRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArns?: list<string>,
     *     Names?: list<string>,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
