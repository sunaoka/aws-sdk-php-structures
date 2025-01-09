<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAvailableManagedRuleGroupVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VendorName
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $NextMarker
 * @property int $Limit
 */
class ListAvailableManagedRuleGroupVersionsRequest extends Request
{
    /**
     * @param array{
     *     VendorName: string,
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
