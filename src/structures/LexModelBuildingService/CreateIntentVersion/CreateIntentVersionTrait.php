<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion;

trait CreateIntentVersionTrait
{
    /**
     * @param CreateIntentVersionRequest $args
     * @return CreateIntentVersionResponse
     */
    public function createIntentVersion(CreateIntentVersionRequest $args)
    {
        $result = parent::createIntentVersion($args->toArray());
        return new CreateIntentVersionResponse($result->toArray());
    }
}
