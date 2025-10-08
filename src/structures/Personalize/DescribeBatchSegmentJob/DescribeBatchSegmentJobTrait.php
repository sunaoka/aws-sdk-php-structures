<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchSegmentJob;

trait DescribeBatchSegmentJobTrait
{
    /**
     * @param DescribeBatchSegmentJobRequest $args
     * @return DescribeBatchSegmentJobResponse
     */
    public function describeBatchSegmentJob(DescribeBatchSegmentJobRequest $args)
    {
        $result = parent::describeBatchSegmentJob($args->toArray());
        return new DescribeBatchSegmentJobResponse($result->toArray());
    }
}
