<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutMetricFilter;

trait PutMetricFilterTrait
{
    /**
     * @param PutMetricFilterRequest $args
     * @return void
     */
    public function putMetricFilter(PutMetricFilterRequest $args)
    {
        parent::putMetricFilter($args->toArray());
    }
}
