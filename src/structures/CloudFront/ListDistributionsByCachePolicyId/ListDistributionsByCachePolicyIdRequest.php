<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByCachePolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $CachePolicyId
 */
class ListDistributionsByCachePolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     CachePolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
