<?php

namespace Sunaoka\Aws\Structures\AutoScaling\EnableMetricsCollection;

trait EnableMetricsCollectionTrait
{
    /**
     * @param EnableMetricsCollectionRequest $args
     * @return void
     */
    public function enableMetricsCollection(EnableMetricsCollectionRequest $args)
    {
        parent::enableMetricsCollection($args->toArray());
    }
}
