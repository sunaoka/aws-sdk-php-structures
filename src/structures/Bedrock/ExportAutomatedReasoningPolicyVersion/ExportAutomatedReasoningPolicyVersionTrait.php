<?php

namespace Sunaoka\Aws\Structures\Bedrock\ExportAutomatedReasoningPolicyVersion;

trait ExportAutomatedReasoningPolicyVersionTrait
{
    /**
     * @param ExportAutomatedReasoningPolicyVersionRequest $args
     * @return ExportAutomatedReasoningPolicyVersionResponse
     */
    public function exportAutomatedReasoningPolicyVersion(ExportAutomatedReasoningPolicyVersionRequest $args)
    {
        $result = parent::exportAutomatedReasoningPolicyVersion($args->toArray());
        return new ExportAutomatedReasoningPolicyVersionResponse($result->toArray());
    }
}
