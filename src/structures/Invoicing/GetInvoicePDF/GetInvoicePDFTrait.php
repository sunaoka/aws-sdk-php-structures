<?php

namespace Sunaoka\Aws\Structures\Invoicing\GetInvoicePDF;

trait GetInvoicePDFTrait
{
    /**
     * @param GetInvoicePDFRequest $args
     * @return GetInvoicePDFResponse
     */
    public function getInvoicePDF(GetInvoicePDFRequest $args)
    {
        $result = parent::getInvoicePDF($args->toArray());
        return new GetInvoicePDFResponse($result->toArray());
    }
}
