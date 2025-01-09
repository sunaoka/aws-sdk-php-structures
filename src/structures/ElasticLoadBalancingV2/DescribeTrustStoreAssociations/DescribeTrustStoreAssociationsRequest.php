<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTrustStoreAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeTrustStoreAssociationsRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
