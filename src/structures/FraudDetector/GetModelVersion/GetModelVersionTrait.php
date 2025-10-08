<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion;

trait GetModelVersionTrait
{
    /**
     * @param GetModelVersionRequest $args
     * @return GetModelVersionResponse
     */
    public function getModelVersion(GetModelVersionRequest $args)
    {
        $result = parent::getModelVersion($args->toArray());
        return new GetModelVersionResponse($result->toArray());
    }
}
