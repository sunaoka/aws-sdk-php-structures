<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateAnomaly;

trait UpdateAnomalyTrait
{
    /**
     * @param UpdateAnomalyRequest $args
     * @return void
     */
    public function updateAnomaly(UpdateAnomalyRequest $args)
    {
        parent::updateAnomaly($args->toArray());
    }
}
