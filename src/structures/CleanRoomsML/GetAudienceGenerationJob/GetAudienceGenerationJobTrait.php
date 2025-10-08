<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob;

trait GetAudienceGenerationJobTrait
{
    /**
     * @param GetAudienceGenerationJobRequest $args
     * @return GetAudienceGenerationJobResponse
     */
    public function getAudienceGenerationJob(GetAudienceGenerationJobRequest $args)
    {
        $result = parent::getAudienceGenerationJob($args->toArray());
        return new GetAudienceGenerationJobResponse($result->toArray());
    }
}
