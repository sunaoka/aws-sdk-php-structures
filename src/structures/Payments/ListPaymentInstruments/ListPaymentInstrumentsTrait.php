<?php

namespace Sunaoka\Aws\Structures\Payments\ListPaymentInstruments;

trait ListPaymentInstrumentsTrait
{
    /**
     * @param ListPaymentInstrumentsRequest $args
     * @return ListPaymentInstrumentsResponse
     */
    public function listPaymentInstruments(ListPaymentInstrumentsRequest $args)
    {
        $result = parent::listPaymentInstruments($args->toArray());
        return new ListPaymentInstrumentsResponse($result->toArray());
    }
}
