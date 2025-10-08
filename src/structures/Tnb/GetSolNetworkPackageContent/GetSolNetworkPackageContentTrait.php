<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackageContent;

trait GetSolNetworkPackageContentTrait
{
    /**
     * @param GetSolNetworkPackageContentRequest $args
     * @return GetSolNetworkPackageContentResponse
     */
    public function getSolNetworkPackageContent(GetSolNetworkPackageContentRequest $args)
    {
        $result = parent::getSolNetworkPackageContent($args->toArray());
        return new GetSolNetworkPackageContentResponse($result->toArray());
    }
}
