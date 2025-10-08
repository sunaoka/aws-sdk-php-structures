<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityInfo;

trait GetCelebrityInfoTrait
{
    /**
     * @param GetCelebrityInfoRequest $args
     * @return GetCelebrityInfoResponse
     */
    public function getCelebrityInfo(GetCelebrityInfoRequest $args)
    {
        $result = parent::getCelebrityInfo($args->toArray());
        return new GetCelebrityInfoResponse($result->toArray());
    }
}
