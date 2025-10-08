<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePackageVersion;

trait DeletePackageVersionTrait
{
    /**
     * @param DeletePackageVersionRequest $args
     * @return DeletePackageVersionResponse
     */
    public function deletePackageVersion(DeletePackageVersionRequest $args)
    {
        $result = parent::deletePackageVersion($args->toArray());
        return new DeletePackageVersionResponse($result->toArray());
    }
}
