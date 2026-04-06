<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateAudienceModel;

trait CreateAudienceModelTrait
{
    /**
     * @param CreateAudienceModelRequest $args
     * @return CreateAudienceModelResponse
     */
    public function createAudienceModel(CreateAudienceModelRequest $args)
    {
        $result = parent::createAudienceModel($args->toArray());
        return new CreateAudienceModelResponse($result->toArray());
    }
}
