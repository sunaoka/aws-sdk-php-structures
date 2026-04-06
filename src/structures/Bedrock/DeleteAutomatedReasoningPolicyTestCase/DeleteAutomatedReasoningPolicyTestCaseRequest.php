<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicyTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $testCaseId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class DeleteAutomatedReasoningPolicyTestCaseRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     testCaseId: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
