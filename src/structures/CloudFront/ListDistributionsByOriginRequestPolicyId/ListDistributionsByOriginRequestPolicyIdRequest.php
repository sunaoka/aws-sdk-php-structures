<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOriginRequestPolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $OriginRequestPolicyId
 */
class ListDistributionsByOriginRequestPolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     OriginRequestPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
