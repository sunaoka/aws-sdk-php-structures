<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredAudienceModel;

trait CreateConfiguredAudienceModelTrait
{
    /**
     * @param CreateConfiguredAudienceModelRequest $args
     * @return CreateConfiguredAudienceModelResponse
     */
    public function createConfiguredAudienceModel(CreateConfiguredAudienceModelRequest $args)
    {
        $result = parent::createConfiguredAudienceModel($args->toArray());
        return new CreateConfiguredAudienceModelResponse($result->toArray());
    }
}
