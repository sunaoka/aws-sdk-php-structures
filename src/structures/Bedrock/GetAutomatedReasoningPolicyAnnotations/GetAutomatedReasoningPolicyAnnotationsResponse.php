<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyAnnotations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyArn
 * @property string $name
 * @property string $buildWorkflowId
 * @property list<Shapes\AutomatedReasoningPolicyAnnotation> $annotations
 * @property string $annotationSetHash
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetAutomatedReasoningPolicyAnnotationsResponse extends Response
{
}
