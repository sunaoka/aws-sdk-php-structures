<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ViewBilling;

trait ViewBillingTrait
{
    /**
     * @param ViewBillingRequest $args
     * @return ViewBillingResponse
     */
    public function viewBilling(ViewBillingRequest $args)
    {
        $result = parent::viewBilling($args->toArray());
        return new ViewBillingResponse($result->toArray());
    }
}
