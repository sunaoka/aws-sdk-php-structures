<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\UpdateConfiguredAudienceModel;

trait UpdateConfiguredAudienceModelTrait
{
    /**
     * @param UpdateConfiguredAudienceModelRequest $args
     * @return UpdateConfiguredAudienceModelResponse
     */
    public function updateConfiguredAudienceModel(UpdateConfiguredAudienceModelRequest $args)
    {
        $result = parent::updateConfiguredAudienceModel($args->toArray());
        return new UpdateConfiguredAudienceModelResponse($result->toArray());
    }
}
