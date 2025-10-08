<?php

namespace Sunaoka\Aws\Structures\Iot\DisassociateSbomFromPackageVersion;

trait DisassociateSbomFromPackageVersionTrait
{
    /**
     * @param DisassociateSbomFromPackageVersionRequest $args
     * @return DisassociateSbomFromPackageVersionResponse
     */
    public function disassociateSbomFromPackageVersion(DisassociateSbomFromPackageVersionRequest $args)
    {
        $result = parent::disassociateSbomFromPackageVersion($args->toArray());
        return new DisassociateSbomFromPackageVersionResponse($result->toArray());
    }
}
