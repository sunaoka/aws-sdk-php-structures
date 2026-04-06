<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $policyVersionArn
 */
class AutomatedReasoningCheckRule extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     policyVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
