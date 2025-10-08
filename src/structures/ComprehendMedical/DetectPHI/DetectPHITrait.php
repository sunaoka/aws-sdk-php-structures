<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectPHI;

trait DetectPHITrait
{
    /**
     * @param DetectPHIRequest $args
     * @return DetectPHIResponse
     */
    public function detectPHI(DetectPHIRequest $args)
    {
        $result = parent::detectPHI($args->toArray());
        return new DetectPHIResponse($result->toArray());
    }
}
