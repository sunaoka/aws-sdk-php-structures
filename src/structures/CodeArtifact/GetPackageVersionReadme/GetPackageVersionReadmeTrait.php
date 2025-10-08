<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetPackageVersionReadme;

trait GetPackageVersionReadmeTrait
{
    /**
     * @param GetPackageVersionReadmeRequest $args
     * @return GetPackageVersionReadmeResponse
     */
    public function getPackageVersionReadme(GetPackageVersionReadmeRequest $args)
    {
        $result = parent::getPackageVersionReadme($args->toArray());
        return new GetPackageVersionReadmeResponse($result->toArray());
    }
}
