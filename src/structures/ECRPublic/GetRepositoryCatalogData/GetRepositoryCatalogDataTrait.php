<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetRepositoryCatalogData;

trait GetRepositoryCatalogDataTrait
{
    /**
     * @param GetRepositoryCatalogDataRequest $args
     * @return GetRepositoryCatalogDataResponse
     */
    public function getRepositoryCatalogData(GetRepositoryCatalogDataRequest $args)
    {
        $result = parent::getRepositoryCatalogData($args->toArray());
        return new GetRepositoryCatalogDataResponse($result->toArray());
    }
}
