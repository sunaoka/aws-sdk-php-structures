<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $testCaseId
 * @property string $guardContent
 * @property string|null $queryContent
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION' $expectedAggregatedFindingsResult
 * @property double|null $confidenceThreshold
 * @property string|null $clientRequestToken
 */
class UpdateAutomatedReasoningPolicyTestCaseRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     testCaseId: string,
     *     guardContent: string,
     *     queryContent?: string|null,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     expectedAggregatedFindingsResult: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION',
     *     confidenceThreshold?: double|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
