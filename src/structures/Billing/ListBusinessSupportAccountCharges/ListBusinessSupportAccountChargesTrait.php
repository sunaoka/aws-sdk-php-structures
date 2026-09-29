<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges;

trait ListBusinessSupportAccountChargesTrait
{
    /**
     * @param ListBusinessSupportAccountChargesRequest $args
     * @return ListBusinessSupportAccountChargesResponse
     */
    public function listBusinessSupportAccountCharges(ListBusinessSupportAccountChargesRequest $args)
    {
        $result = parent::listBusinessSupportAccountCharges($args->toArray());
        return new ListBusinessSupportAccountChargesResponse($result->toArray());
    }
}
