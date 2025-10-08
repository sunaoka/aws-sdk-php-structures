<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateDatasourcePackages;

trait UpdateDatasourcePackagesTrait
{
    /**
     * @param UpdateDatasourcePackagesRequest $args
     * @return void
     */
    public function updateDatasourcePackages(UpdateDatasourcePackagesRequest $args)
    {
        parent::updateDatasourcePackages($args->toArray());
    }
}
