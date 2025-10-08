<?php

namespace Sunaoka\Aws\Structures\Ses\ListReceiptFilters;

trait ListReceiptFiltersTrait
{
    /**
     * @param ListReceiptFiltersRequest $args
     * @return ListReceiptFiltersResponse
     */
    public function listReceiptFilters(ListReceiptFiltersRequest $args)
    {
        $result = parent::listReceiptFilters($args->toArray());
        return new ListReceiptFiltersResponse($result->toArray());
    }
}
