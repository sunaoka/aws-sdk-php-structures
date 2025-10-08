<?php

namespace Sunaoka\Aws\Structures\Tnb\PutSolNetworkPackageContent;

trait PutSolNetworkPackageContentTrait
{
    /**
     * @param PutSolNetworkPackageContentRequest $args
     * @return PutSolNetworkPackageContentResponse
     */
    public function putSolNetworkPackageContent(PutSolNetworkPackageContentRequest $args)
    {
        $result = parent::putSolNetworkPackageContent($args->toArray());
        return new PutSolNetworkPackageContentResponse($result->toArray());
    }
}
