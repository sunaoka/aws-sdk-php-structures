<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedProductsByVendor;

trait DescribeManagedProductsByVendorTrait
{
    /**
     * @param DescribeManagedProductsByVendorRequest $args
     * @return DescribeManagedProductsByVendorResponse
     */
    public function describeManagedProductsByVendor(DescribeManagedProductsByVendorRequest $args)
    {
        $result = parent::describeManagedProductsByVendor($args->toArray());
        return new DescribeManagedProductsByVendorResponse($result->toArray());
    }
}
