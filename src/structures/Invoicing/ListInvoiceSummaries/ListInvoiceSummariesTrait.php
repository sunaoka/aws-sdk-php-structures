<?php

namespace Sunaoka\Aws\Structures\Invoicing\ListInvoiceSummaries;

trait ListInvoiceSummariesTrait
{
    /**
     * @param ListInvoiceSummariesRequest $args
     * @return ListInvoiceSummariesResponse
     */
    public function listInvoiceSummaries(ListInvoiceSummariesRequest $args)
    {
        $result = parent::listInvoiceSummaries($args->toArray());
        return new ListInvoiceSummariesResponse($result->toArray());
    }
}
