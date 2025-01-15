<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListResponseHeadersPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'managed'|'custom'|null $Type
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListResponseHeadersPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'managed'|'custom'|null,
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
