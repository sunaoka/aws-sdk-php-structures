<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel;

trait GetConfiguredAudienceModelTrait
{
    /**
     * @param GetConfiguredAudienceModelRequest $args
     * @return GetConfiguredAudienceModelResponse
     */
    public function getConfiguredAudienceModel(GetConfiguredAudienceModelRequest $args)
    {
        $result = parent::getConfiguredAudienceModel($args->toArray());
        return new GetConfiguredAudienceModelResponse($result->toArray());
    }
}
