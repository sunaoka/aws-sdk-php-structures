<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DisableMetricsCollection;

trait DisableMetricsCollectionTrait
{
    /**
     * @param DisableMetricsCollectionRequest $args
     * @return void
     */
    public function disableMetricsCollection(DisableMetricsCollectionRequest $args)
    {
        parent::disableMetricsCollection($args->toArray());
    }
}
