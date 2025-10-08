<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateLensVersion;

trait CreateLensVersionTrait
{
    /**
     * @param CreateLensVersionRequest $args
     * @return CreateLensVersionResponse
     */
    public function createLensVersion(CreateLensVersionRequest $args)
    {
        $result = parent::createLensVersion($args->toArray());
        return new CreateLensVersionResponse($result->toArray());
    }
}
