<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByResponseHeadersPolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $ResponseHeadersPolicyId
 */
class ListDistributionsByResponseHeadersPolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     ResponseHeadersPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
