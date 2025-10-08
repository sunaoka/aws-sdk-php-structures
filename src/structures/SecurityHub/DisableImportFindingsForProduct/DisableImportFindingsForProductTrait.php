<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableImportFindingsForProduct;

trait DisableImportFindingsForProductTrait
{
    /**
     * @param DisableImportFindingsForProductRequest $args
     * @return DisableImportFindingsForProductResponse
     */
    public function disableImportFindingsForProduct(DisableImportFindingsForProductRequest $args)
    {
        $result = parent::disableImportFindingsForProduct($args->toArray());
        return new DisableImportFindingsForProductResponse($result->toArray());
    }
}
