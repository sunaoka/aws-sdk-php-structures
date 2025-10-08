<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListEnabledProductsForImport;

trait ListEnabledProductsForImportTrait
{
    /**
     * @param ListEnabledProductsForImportRequest $args
     * @return ListEnabledProductsForImportResponse
     */
    public function listEnabledProductsForImport(ListEnabledProductsForImportRequest $args)
    {
        $result = parent::listEnabledProductsForImport($args->toArray());
        return new ListEnabledProductsForImportResponse($result->toArray());
    }
}
