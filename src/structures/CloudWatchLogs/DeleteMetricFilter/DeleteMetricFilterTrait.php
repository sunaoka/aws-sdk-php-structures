<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteMetricFilter;

trait DeleteMetricFilterTrait
{
    /**
     * @param DeleteMetricFilterRequest $args
     * @return void
     */
    public function deleteMetricFilter(DeleteMetricFilterRequest $args)
    {
        parent::deleteMetricFilter($args->toArray());
    }
}
