<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginRequestPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'managed'|'custom' $Type
 * @property string $Marker
 * @property string $MaxItems
 */
class ListOriginRequestPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'managed'|'custom',
     *     Marker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
