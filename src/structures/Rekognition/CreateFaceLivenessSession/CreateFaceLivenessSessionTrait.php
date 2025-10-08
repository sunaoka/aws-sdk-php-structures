<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession;

trait CreateFaceLivenessSessionTrait
{
    /**
     * @param CreateFaceLivenessSessionRequest $args
     * @return CreateFaceLivenessSessionResponse
     */
    public function createFaceLivenessSession(CreateFaceLivenessSessionRequest $args)
    {
        $result = parent::createFaceLivenessSession($args->toArray());
        return new CreateFaceLivenessSessionResponse($result->toArray());
    }
}
