<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamRecordDistributionStrategy;

trait UpdateStreamRecordDistributionStrategyTrait
{
    /**
     * @param UpdateStreamRecordDistributionStrategyRequest $args
     * @return void
     */
    public function updateStreamRecordDistributionStrategy(UpdateStreamRecordDistributionStrategyRequest $args)
    {
        parent::updateStreamRecordDistributionStrategy($args->toArray());
    }
}
