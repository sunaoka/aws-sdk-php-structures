<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackageContent;

trait GetSolFunctionPackageContentTrait
{
    /**
     * @param GetSolFunctionPackageContentRequest $args
     * @return GetSolFunctionPackageContentResponse
     */
    public function getSolFunctionPackageContent(GetSolFunctionPackageContentRequest $args)
    {
        $result = parent::getSolFunctionPackageContent($args->toArray());
        return new GetSolFunctionPackageContentResponse($result->toArray());
    }
}
