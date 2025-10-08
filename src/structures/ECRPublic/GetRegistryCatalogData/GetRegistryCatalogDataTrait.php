<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetRegistryCatalogData;

trait GetRegistryCatalogDataTrait
{
    /**
     * @param GetRegistryCatalogDataRequest $args
     * @return GetRegistryCatalogDataResponse
     */
    public function getRegistryCatalogData(GetRegistryCatalogDataRequest $args)
    {
        $result = parent::getRegistryCatalogData($args->toArray());
        return new GetRegistryCatalogDataResponse($result->toArray());
    }
}
