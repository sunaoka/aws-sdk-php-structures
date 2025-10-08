<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeletePackage;

trait DeletePackageTrait
{
    /**
     * @param DeletePackageRequest $args
     * @return DeletePackageResponse
     */
    public function deletePackage(DeletePackageRequest $args)
    {
        $result = parent::deletePackage($args->toArray());
        return new DeletePackageResponse($result->toArray());
    }
}
