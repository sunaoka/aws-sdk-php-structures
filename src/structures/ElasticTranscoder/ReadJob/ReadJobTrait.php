<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob;

trait ReadJobTrait
{
    /**
     * @param ReadJobRequest $args
     * @return ReadJobResponse
     */
    public function readJob(ReadJobRequest $args)
    {
        $result = parent::readJob($args->toArray());
        return new ReadJobResponse($result->toArray());
    }
}
