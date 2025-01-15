<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VendorName
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $NextMarker
 * @property int<1, 100>|null $Limit
 */
class ListAvailableManagedRuleGroupVersionsRequest extends Request
{
    /**
     * @param array{
     *     VendorName: string,
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
