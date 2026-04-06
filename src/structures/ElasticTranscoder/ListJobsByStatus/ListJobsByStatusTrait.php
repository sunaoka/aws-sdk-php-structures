<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus;

trait ListJobsByStatusTrait
{
    /**
     * @param ListJobsByStatusRequest $args
     * @return ListJobsByStatusResponse
     */
    public function listJobsByStatus(ListJobsByStatusRequest $args)
    {
        $result = parent::listJobsByStatus($args->toArray());
        return new ListJobsByStatusResponse($result->toArray());
    }
}
