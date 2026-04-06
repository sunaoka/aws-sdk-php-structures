<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyAnnotations;

trait GetAutomatedReasoningPolicyAnnotationsTrait
{
    /**
     * @param GetAutomatedReasoningPolicyAnnotationsRequest $args
     * @return GetAutomatedReasoningPolicyAnnotationsResponse
     */
    public function getAutomatedReasoningPolicyAnnotations(GetAutomatedReasoningPolicyAnnotationsRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicyAnnotations($args->toArray());
        return new GetAutomatedReasoningPolicyAnnotationsResponse($result->toArray());
    }
}
