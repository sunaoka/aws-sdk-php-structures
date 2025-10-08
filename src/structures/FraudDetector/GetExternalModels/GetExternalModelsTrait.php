<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetExternalModels;

trait GetExternalModelsTrait
{
    /**
     * @param GetExternalModelsRequest $args
     * @return GetExternalModelsResponse
     */
    public function getExternalModels(GetExternalModelsRequest $args)
    {
        $result = parent::getExternalModels($args->toArray());
        return new GetExternalModelsResponse($result->toArray());
    }
}
