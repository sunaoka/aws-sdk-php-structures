<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolutionVersion;

trait CreateSolutionVersionTrait
{
    /**
     * @param CreateSolutionVersionRequest $args
     * @return CreateSolutionVersionResponse
     */
    public function createSolutionVersion(CreateSolutionVersionRequest $args)
    {
        $result = parent::createSolutionVersion($args->toArray());
        return new CreateSolutionVersionResponse($result->toArray());
    }
}
