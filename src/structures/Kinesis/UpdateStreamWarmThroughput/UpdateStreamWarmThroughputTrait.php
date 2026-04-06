<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamWarmThroughput;

trait UpdateStreamWarmThroughputTrait
{
    /**
     * @param UpdateStreamWarmThroughputRequest $args
     * @return UpdateStreamWarmThroughputResponse
     */
    public function updateStreamWarmThroughput(UpdateStreamWarmThroughputRequest $args)
    {
        $result = parent::updateStreamWarmThroughput($args->toArray());
        return new UpdateStreamWarmThroughputResponse($result->toArray());
    }
}
