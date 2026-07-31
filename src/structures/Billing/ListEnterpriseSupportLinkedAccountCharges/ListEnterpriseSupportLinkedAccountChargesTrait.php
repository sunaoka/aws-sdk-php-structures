<?php

namespace Sunaoka\Aws\Structures\Billing\ListEnterpriseSupportLinkedAccountCharges;

trait ListEnterpriseSupportLinkedAccountChargesTrait
{
    /**
     * @param ListEnterpriseSupportLinkedAccountChargesRequest $args
     * @return ListEnterpriseSupportLinkedAccountChargesResponse
     */
    public function listEnterpriseSupportLinkedAccountCharges(ListEnterpriseSupportLinkedAccountChargesRequest $args)
    {
        $result = parent::listEnterpriseSupportLinkedAccountCharges($args->toArray());
        return new ListEnterpriseSupportLinkedAccountChargesResponse($result->toArray());
    }
}
