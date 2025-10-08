<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetCodegenJob;

trait GetCodegenJobTrait
{
    /**
     * @param GetCodegenJobRequest $args
     * @return GetCodegenJobResponse
     */
    public function getCodegenJob(GetCodegenJobRequest $args)
    {
        $result = parent::getCodegenJob($args->toArray());
        return new GetCodegenJobResponse($result->toArray());
    }
}
