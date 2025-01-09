<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeAllManagedProducts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 */
class DescribeAllManagedProductsRequest extends Request
{
    /**
     * @param array{Scope: 'CLOUDFRONT'|'REGIONAL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
