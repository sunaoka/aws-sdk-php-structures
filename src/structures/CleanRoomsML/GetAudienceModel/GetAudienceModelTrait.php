<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceModel;

trait GetAudienceModelTrait
{
    /**
     * @param GetAudienceModelRequest $args
     * @return GetAudienceModelResponse
     */
    public function getAudienceModel(GetAudienceModelRequest $args)
    {
        $result = parent::getAudienceModel($args->toArray());
        return new GetAudienceModelResponse($result->toArray());
    }
}
