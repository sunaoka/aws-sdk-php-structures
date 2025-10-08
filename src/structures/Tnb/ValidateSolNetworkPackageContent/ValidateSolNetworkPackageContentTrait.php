<?php

namespace Sunaoka\Aws\Structures\Tnb\ValidateSolNetworkPackageContent;

trait ValidateSolNetworkPackageContentTrait
{
    /**
     * @param ValidateSolNetworkPackageContentRequest $args
     * @return ValidateSolNetworkPackageContentResponse
     */
    public function validateSolNetworkPackageContent(ValidateSolNetworkPackageContentRequest $args)
    {
        $result = parent::validateSolNetworkPackageContent($args->toArray());
        return new ValidateSolNetworkPackageContentResponse($result->toArray());
    }
}
