<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchSegmentJob;

trait CreateBatchSegmentJobTrait
{
    /**
     * @param CreateBatchSegmentJobRequest $args
     * @return CreateBatchSegmentJobResponse
     */
    public function createBatchSegmentJob(CreateBatchSegmentJobRequest $args)
    {
        $result = parent::createBatchSegmentJob($args->toArray());
        return new CreateBatchSegmentJobResponse($result->toArray());
    }
}
