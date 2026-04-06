<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations;

trait UpdateAutomatedReasoningPolicyAnnotationsTrait
{
    /**
     * @param UpdateAutomatedReasoningPolicyAnnotationsRequest $args
     * @return UpdateAutomatedReasoningPolicyAnnotationsResponse
     */
    public function updateAutomatedReasoningPolicyAnnotations(UpdateAutomatedReasoningPolicyAnnotationsRequest $args)
    {
        $result = parent::updateAutomatedReasoningPolicyAnnotations($args->toArray());
        return new UpdateAutomatedReasoningPolicyAnnotationsResponse($result->toArray());
    }
}
