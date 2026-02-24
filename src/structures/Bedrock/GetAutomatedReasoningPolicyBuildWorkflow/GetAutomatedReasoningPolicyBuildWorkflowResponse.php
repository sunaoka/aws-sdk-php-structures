<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property 'SCHEDULED'|'CANCEL_REQUESTED'|'PREPROCESSING'|'BUILDING'|'TESTING'|'COMPLETED'|'FAILED'|'CANCELLED' $status
 * @property 'INGEST_CONTENT'|'REFINE_POLICY'|'IMPORT_POLICY'|'GENERATE_FIDELITY_REPORT' $buildWorkflowType
 * @property string|null $documentName
 * @property 'pdf'|'txt'|null $documentContentType
 * @property string|null $documentDescription
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetAutomatedReasoningPolicyBuildWorkflowResponse extends Response
{
}
