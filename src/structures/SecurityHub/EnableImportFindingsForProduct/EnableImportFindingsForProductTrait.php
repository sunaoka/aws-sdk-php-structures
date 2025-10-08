<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableImportFindingsForProduct;

trait EnableImportFindingsForProductTrait
{
    /**
     * @param EnableImportFindingsForProductRequest $args
     * @return EnableImportFindingsForProductResponse
     */
    public function enableImportFindingsForProduct(EnableImportFindingsForProductRequest $args)
    {
        $result = parent::enableImportFindingsForProduct($args->toArray());
        return new EnableImportFindingsForProductResponse($result->toArray());
    }
}
