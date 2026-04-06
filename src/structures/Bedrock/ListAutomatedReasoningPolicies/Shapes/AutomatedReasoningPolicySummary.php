<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 * @property string $name
 * @property string|null $description
 * @property string $version
 * @property string $policyId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AutomatedReasoningPolicySummary extends Shape
{
    /**
     * @param array{
     *     policyArn: string,
     *     name: string,
     *     description?: string|null,
     *     version: string,
     *     policyId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
