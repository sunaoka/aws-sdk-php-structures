<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyAnnotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property list<Shapes\AutomatedReasoningPolicyAnnotation> $annotations
 * @property string $lastUpdatedAnnotationSetHash
 */
class UpdateAutomatedReasoningPolicyAnnotationsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     annotations: list<Shapes\AutomatedReasoningPolicyAnnotation>,
     *     lastUpdatedAnnotationSetHash: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
