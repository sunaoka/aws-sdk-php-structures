<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRegistryCatalogData;

trait PutRegistryCatalogDataTrait
{
    /**
     * @param PutRegistryCatalogDataRequest $args
     * @return PutRegistryCatalogDataResponse
     */
    public function putRegistryCatalogData(PutRegistryCatalogDataRequest $args)
    {
        $result = parent::putRegistryCatalogData($args->toArray());
        return new PutRegistryCatalogDataResponse($result->toArray());
    }
}
