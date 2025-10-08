<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetJobManifest;

trait GetJobManifestTrait
{
    /**
     * @param GetJobManifestRequest $args
     * @return GetJobManifestResponse
     */
    public function getJobManifest(GetJobManifestRequest $args)
    {
        $result = parent::getJobManifest($args->toArray());
        return new GetJobManifestResponse($result->toArray());
    }
}
