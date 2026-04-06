<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeTrustStoreAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
