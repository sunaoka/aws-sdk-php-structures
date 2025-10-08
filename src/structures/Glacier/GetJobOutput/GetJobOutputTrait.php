<?php

namespace Sunaoka\Aws\Structures\Glacier\GetJobOutput;

trait GetJobOutputTrait
{
    /**
     * @param GetJobOutputRequest $args
     * @return GetJobOutputResponse
     */
    public function getJobOutput(GetJobOutputRequest $args)
    {
        $result = parent::getJobOutput($args->toArray());
        return new GetJobOutputResponse($result->toArray());
    }
}
