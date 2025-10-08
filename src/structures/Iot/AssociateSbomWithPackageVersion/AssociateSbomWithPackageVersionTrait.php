<?php

namespace Sunaoka\Aws\Structures\Iot\AssociateSbomWithPackageVersion;

trait AssociateSbomWithPackageVersionTrait
{
    /**
     * @param AssociateSbomWithPackageVersionRequest $args
     * @return AssociateSbomWithPackageVersionResponse
     */
    public function associateSbomWithPackageVersion(AssociateSbomWithPackageVersionRequest $args)
    {
        $result = parent::associateSbomWithPackageVersion($args->toArray());
        return new AssociateSbomWithPackageVersionResponse($result->toArray());
    }
}
