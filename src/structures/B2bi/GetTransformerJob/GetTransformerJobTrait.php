<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformerJob;

trait GetTransformerJobTrait
{
    /**
     * @param GetTransformerJobRequest $args
     * @return GetTransformerJobResponse
     */
    public function getTransformerJob(GetTransformerJobRequest $args)
    {
        $result = parent::getTransformerJob($args->toArray());
        return new GetTransformerJobResponse($result->toArray());
    }
}
