<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $testCaseId
 */
class GetAutomatedReasoningPolicyTestCaseRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     testCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
