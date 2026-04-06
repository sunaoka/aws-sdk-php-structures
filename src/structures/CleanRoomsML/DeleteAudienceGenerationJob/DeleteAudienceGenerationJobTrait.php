<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteAudienceGenerationJob;

trait DeleteAudienceGenerationJobTrait
{
    /**
     * @param DeleteAudienceGenerationJobRequest $args
     * @return void
     */
    public function deleteAudienceGenerationJob(DeleteAudienceGenerationJobRequest $args)
    {
        parent::deleteAudienceGenerationJob($args->toArray());
    }
}
