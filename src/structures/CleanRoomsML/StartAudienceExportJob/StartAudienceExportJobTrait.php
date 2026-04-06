<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartAudienceExportJob;

trait StartAudienceExportJobTrait
{
    /**
     * @param StartAudienceExportJobRequest $args
     * @return void
     */
    public function startAudienceExportJob(StartAudienceExportJobRequest $args)
    {
        parent::startAudienceExportJob($args->toArray());
    }
}
