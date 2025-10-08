<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion;

trait CreateModelVersionTrait
{
    /**
     * @param CreateModelVersionRequest $args
     * @return CreateModelVersionResponse
     */
    public function createModelVersion(CreateModelVersionRequest $args)
    {
        $result = parent::createModelVersion($args->toArray());
        return new CreateModelVersionResponse($result->toArray());
    }
}
