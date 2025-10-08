<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages;

trait ListDatasourcePackagesTrait
{
    /**
     * @param ListDatasourcePackagesRequest $args
     * @return ListDatasourcePackagesResponse
     */
    public function listDatasourcePackages(ListDatasourcePackagesRequest $args)
    {
        $result = parent::listDatasourcePackages($args->toArray());
        return new ListDatasourcePackagesResponse($result->toArray());
    }
}
