<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOriginRequestPolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $OriginRequestPolicyId
 */
class ListDistributionsByOriginRequestPolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     OriginRequestPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
