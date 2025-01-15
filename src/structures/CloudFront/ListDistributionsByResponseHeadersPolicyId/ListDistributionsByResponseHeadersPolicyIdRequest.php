<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByResponseHeadersPolicyId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $ResponseHeadersPolicyId
 */
class ListDistributionsByResponseHeadersPolicyIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     ResponseHeadersPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
