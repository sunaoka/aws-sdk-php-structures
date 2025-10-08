<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolFunctionPackageContent;

trait ValidateSolFunctionPackageContentTrait
{
    /**
     * @param ValidateSolFunctionPackageContentRequest $args
     * @return ValidateSolFunctionPackageContentResponse
     */
    public function validateSolFunctionPackageContent(ValidateSolFunctionPackageContentRequest $args)
    {
        $result = parent::validateSolFunctionPackageContent($args->toArray());
        return new ValidateSolFunctionPackageContentResponse($result->toArray());
    }
}
