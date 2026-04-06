<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\StartTrainedModelExportJob;

trait StartTrainedModelExportJobTrait
{
    /**
     * @param StartTrainedModelExportJobRequest $args
     * @return void
     */
    public function startTrainedModelExportJob(StartTrainedModelExportJobRequest $args)
    {
        parent::startTrainedModelExportJob($args->toArray());
    }
}
