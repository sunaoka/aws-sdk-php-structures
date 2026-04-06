<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdatePackageScope;

trait UpdatePackageScopeTrait
{
    /**
     * @param UpdatePackageScopeRequest $args
     * @return UpdatePackageScopeResponse
     */
    public function updatePackageScope(UpdatePackageScopeRequest $args)
    {
        $result = parent::updatePackageScope($args->toArray());
        return new UpdatePackageScopeResponse($result->toArray());
    }
}
