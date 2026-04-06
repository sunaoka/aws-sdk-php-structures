<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicyTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $guardContent
 * @property string|null $queryContent
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION' $expectedAggregatedFindingsResult
 * @property string|null $clientRequestToken
 * @property double|null $confidenceThreshold
 */
class CreateAutomatedReasoningPolicyTestCaseRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     guardContent: string,
     *     queryContent?: string|null,
     *     expectedAggregatedFindingsResult: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION',
     *     clientRequestToken?: string|null,
     *     confidenceThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
