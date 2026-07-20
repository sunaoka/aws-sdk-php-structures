<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountPricingAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE' $Plan
 */
class PutAccountPricingAttributesRequest extends Request
{
    /**
     * @param array{Plan: 'NONE'|'ESSENTIALS'|'PRO'|'ENTERPRISE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
