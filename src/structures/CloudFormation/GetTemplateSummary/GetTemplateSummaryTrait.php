<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary;

trait GetTemplateSummaryTrait
{
    /**
     * @param GetTemplateSummaryRequest $args
     * @return GetTemplateSummaryResponse
     */
    public function getTemplateSummary(GetTemplateSummaryRequest $args)
    {
        $result = parent::getTemplateSummary($args->toArray());
        return new GetTemplateSummaryResponse($result->toArray());
    }
}
