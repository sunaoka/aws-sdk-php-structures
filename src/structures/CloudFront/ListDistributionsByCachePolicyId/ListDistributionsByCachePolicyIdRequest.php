<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByCachePolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $CachePolicyId
 */
class ListDistributionsByCachePolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     CachePolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
