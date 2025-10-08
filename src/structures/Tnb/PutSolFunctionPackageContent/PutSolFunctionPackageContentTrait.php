<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolFunctionPackageContent;

trait PutSolFunctionPackageContentTrait
{
    /**
     * @param PutSolFunctionPackageContentRequest $args
     * @return PutSolFunctionPackageContentResponse
     */
    public function putSolFunctionPackageContent(PutSolFunctionPackageContentRequest $args)
    {
        $result = parent::putSolFunctionPackageContent($args->toArray());
        return new PutSolFunctionPackageContentResponse($result->toArray());
    }
}
