<?php

namespace Sunaoka\Aws\Structures\Outposts\GetRenewalPricing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 */
class GetRenewalPricingRequest extends Request
{
    /**
     * @param array{OutpostIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
