<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedProductsByVendor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VendorName
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 */
class DescribeManagedProductsByVendorRequest extends Request
{
    /**
     * @param array{
     *     VendorName: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
