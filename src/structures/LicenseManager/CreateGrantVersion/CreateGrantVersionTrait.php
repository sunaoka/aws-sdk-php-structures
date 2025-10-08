<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrantVersion;

trait CreateGrantVersionTrait
{
    /**
     * @param CreateGrantVersionRequest $args
     * @return CreateGrantVersionResponse
     */
    public function createGrantVersion(CreateGrantVersionRequest $args)
    {
        $result = parent::createGrantVersion($args->toArray());
        return new CreateGrantVersionResponse($result->toArray());
    }
}
