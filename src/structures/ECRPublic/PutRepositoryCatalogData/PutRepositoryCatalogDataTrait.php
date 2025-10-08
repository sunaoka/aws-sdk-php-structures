<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRepositoryCatalogData;

trait PutRepositoryCatalogDataTrait
{
    /**
     * @param PutRepositoryCatalogDataRequest $args
     * @return PutRepositoryCatalogDataResponse
     */
    public function putRepositoryCatalogData(PutRepositoryCatalogDataRequest $args)
    {
        $result = parent::putRepositoryCatalogData($args->toArray());
        return new PutRepositoryCatalogDataResponse($result->toArray());
    }
}
