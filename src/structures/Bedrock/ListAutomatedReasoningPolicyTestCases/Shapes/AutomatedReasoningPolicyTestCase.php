<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseId
 * @property string $guardContent
 * @property string|null $queryContent
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'|null $expectedAggregatedFindingsResult
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property double|null $confidenceThreshold
 */
class AutomatedReasoningPolicyTestCase extends Shape
{
    /**
     * @param array{
     *     testCaseId: string,
     *     guardContent: string,
     *     queryContent?: string|null,
     *     expectedAggregatedFindingsResult?: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     confidenceThreshold?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
