<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateServiceLastAccessedDetails;

trait GenerateServiceLastAccessedDetailsTrait
{
    /**
     * @param GenerateServiceLastAccessedDetailsRequest $args
     * @return GenerateServiceLastAccessedDetailsResponse
     */
    public function generateServiceLastAccessedDetails(GenerateServiceLastAccessedDetailsRequest $args)
    {
        $result = parent::generateServiceLastAccessedDetails($args->toArray());
        return new GenerateServiceLastAccessedDetailsResponse($result->toArray());
    }
}
