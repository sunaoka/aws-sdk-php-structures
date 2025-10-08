<?php

namespace Sunaoka\Aws\Structures\AppRunner\ResumeService;

trait ResumeServiceTrait
{
    /**
     * @param ResumeServiceRequest $args
     * @return ResumeServiceResponse
     */
    public function resumeService(ResumeServiceRequest $args)
    {
        $result = parent::resumeService($args->toArray());
        return new ResumeServiceResponse($result->toArray());
    }
}
