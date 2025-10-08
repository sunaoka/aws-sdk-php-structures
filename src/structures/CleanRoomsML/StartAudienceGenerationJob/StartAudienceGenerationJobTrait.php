<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceGenerationJob;

trait StartAudienceGenerationJobTrait
{
    /**
     * @param StartAudienceGenerationJobRequest $args
     * @return StartAudienceGenerationJobResponse
     */
    public function startAudienceGenerationJob(StartAudienceGenerationJobRequest $args)
    {
        $result = parent::startAudienceGenerationJob($args->toArray());
        return new StartAudienceGenerationJobResponse($result->toArray());
    }
}
