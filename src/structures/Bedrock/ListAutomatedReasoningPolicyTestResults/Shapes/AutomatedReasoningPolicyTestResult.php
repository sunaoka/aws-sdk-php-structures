<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyTestCase $testCase
 * @property string $policyArn
 * @property 'NOT_STARTED'|'SCHEDULED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $testRunStatus
 * @property list<AutomatedReasoningCheckFinding>|null $testFindings
 * @property 'PASSED'|'FAILED'|null $testRunResult
 * @property 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'|null $aggregatedTestFindingsResult
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AutomatedReasoningPolicyTestResult extends Shape
{
    /**
     * @param array{
     *     testCase: AutomatedReasoningPolicyTestCase,
     *     policyArn: string,
     *     testRunStatus: 'NOT_STARTED'|'SCHEDULED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     testFindings?: list<AutomatedReasoningCheckFinding>|null,
     *     testRunResult?: 'PASSED'|'FAILED'|null,
     *     aggregatedTestFindingsResult?: 'VALID'|'INVALID'|'SATISFIABLE'|'IMPOSSIBLE'|'TRANSLATION_AMBIGUOUS'|'TOO_COMPLEX'|'NO_TRANSLATION'|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
